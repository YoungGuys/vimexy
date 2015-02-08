<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 21:28
 */

namespace Model;
use Balon\Date;
use Balon\System;
use Controller\User;
use Parse\ParseException;
use Parse\ParseGeoPoint;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseUser;

class Events extends System\Model{

    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function loadList()
    {
        //organize list

        $q = new ParseQuery("Organization");
        $organizationList = $q->find();


        $q = new ParseQuery("Event");
        $q->descending("createdAt");



        if (!empty($_GET['city'])) {
            $q->equalTo("city",$_GET['city']);
        }
        if (!empty($_GET['month'])) {
            $date1 = new \DateTime();
            $date2 = new \DateTime();
            $date1->setDate($date1->format("Y"), intval($_GET['month']), 1);
            $date2->setDate($date2->format("Y"), intval($_GET['month']), 31);
            $q->greaterThan("date",$date1);
            $q->lessThan("date",$date2);
        }
        if (!empty($_GET['organizer'])) {
            $user = new ParseQuery("Organization");
            //$user->find();
            $q->equalTo("organizerOID",$user->get($_GET['organizer']));
        }
        $q->limit(5);
        $data = $q->find();
        foreach ($data as $key => $event) {
            if ($event->organizerUID !== null) {
                $organizerUID[] = $event->organizerUID->getObjectId();
            }
            elseif ($event->organizerOID !== null) {
                $organizerOID[] = $event->organizerOID->getObjectId();
            }
                $year = $event->date->format("Y");
                $month = Date::getDate($event->date->format("m"));
                $day = $event->date->format("d");
                $data[$key]->date = "$day $month $year";
                if ($event->finishDate) {
                    $year = $event->finishDate->format("Y");
                    $month = Date::getDate($event->finishDate->format("m"));
                    $day = $event->finishDate->format("d");
                    $data[$key]->finishDate = "$day $month $year";
                }
        }
        if ($organizerUID) {
            $users = new ParseQuery("_User");
            $users->containedIn("objectId", $organizerUID);
            $users = $users->find();
        }
        if ($organizerOID) {
            $organization = new ParseQuery("Organization");
            $organization->containedIn("objectId", $organizerOID);
            $organization = $organization->find();
        }
        foreach ($data as $key => $event) {
            if ($event->organizerOID !== null) {
                foreach ($organization as $key1=>$val) {
                    if ($val->getObjectId() == $event->organizerOID->getObjectId()) {
                        $data[$key]->nameAuthor = $val->get("name");
                        $data[$key]->idAuthor = $val->getObjectId();
                    }
                }
            }
            elseif ($event->organizerUID !== null) {
                if ($event->organizerUID !== null) {
                    foreach ($users as $key1=>$val) {
                        if ($val->getObjectId() == $event->organizerUID->getObjectId()) {
                            $data[$key]->nameAuthor = $val->get("firstName");
                            $data[$key]->idAuthor = $val->getObjectId();
                        }
                    }
                }
            }
        }
        $data['organizationList'] = $organizationList;
        return $data;
    }



    public function show() {
        $q = new ParseQuery("Event");
        $q->equalTo("objectId",$_GET['id']);
        $event = $q->find()[0];
        $year = $event->date->format("Y");
        $month = Date::getDate($event->date->format("m"));
        $day = $event->get('date')->format("d");
        $event->date = "$day $month $year";
        if ($event->get('finishDate')) {
            $year = $event->get('finishDate')->format("Y");
            $month = Date::getDate($event->finishDate->format("m"));
            $day = $event->get('finishDate')->format("d");
            $event->finishDate = "$day $month $year";
        }
        if ($event->organizerUID !== null) {
            $id = $event->organizerUID->getObjectId();
            $user = new ParseQuery("_User",$id);
            $user->equalTo("objectId",$id);
            $users = $user->find();
        }
        elseif ($event->organizerOID !== null) {
            $id = $event->organizerOID->getObjectId();
            $user = new ParseQuery("Organization",$id);
            $user->equalTo("objectId",$id);
            $users = $user->find();
        }
        $a = $event->get('time');
        $explodeTime = explode("-",$a);
        $event->time_s = $explodeTime[0];
        $event->time_f = $explodeTime[1];
        $data['user'] = $users;
        $data['data'] = $event;


        //comments


        $user = new ParseQuery("_User");
        $q = new ParseQuery("Comment");
        $q->equalTo("eventID",$_GET['id']);
        $result = $q->find();
        foreach ($result as $key => $event) {
            $year = $event->date->format("Y");
            $month = Date::getDate($event->date->format("m"));
            $day = $event->get('date')->format("d");
            $result[$key]->date = "$day $month $year";
        }
        $data['comments'] = $result;
        foreach ($result as $key => $val) {

            $array[$val->get("authorID")->getObjectId()] = true;

        }
        if ($array) {
            foreach ($array as $key => $val) {
                $arrayUsers[] = $key;
            }
            $q = new ParseQuery("_User");
            $q->containedIn("objectId", $arrayUsers);
            $result = $q->find();
            foreach ($result as $key => $array) {
                $results[$array->getObjectId()] = $array;
            }
            $data['commentsUser'] = $results;
        }
        return $data;
    }


}