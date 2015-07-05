<?php
/**
 * Created by PhpStorm.
 * User: Balon
 * Date: 07.02.2015
 * Time: 17:35
 */

namespace Model;
use Balon\Date;
use Balon\System;
use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseUser;

class User extends System\Model{

    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function index()
    {

    }

    public function checkUser() {
        $pass = $_GET['pass'];
        $email = $_GET['email'];
        try {
            setcookie("auth",true,time() + 60*60*24);
            ParseUser::logIn($email, $pass);
            header("Location:".SITE."Events?access=true");
        } catch (ParseException $error) {
            echo "Bad pass";
        }
    }

    public function addUser() {
        $user = new ParseUser();
        $user->set("username", $_GET['email']);
        $user->set("password", $_GET['password']);
        $user->set("email", $_GET['email']);
        $user->set("firstName", $_GET['name']);
        $user->set("lastName", $_GET['lastname']);

        if ($_GET['sex'] == "man") {
            $user->set("gender", "M");
        } elseif ($_GET['sex'] == "girl") {
            $user->set("gender", "F");
        }

        $user->set("city", $_GET['city']);

        $date = new \DateTime();
        $date->setDate($_GET['year'], intval($_GET['month']), $_GET['day']);
        $user->set("birthDate",$date);
        $user->signUp();
        setcookie("auth",true,time() + 60*60*24*7);
    }


    public function friends()
    {

    }


    public function show()
    {
        if (!$_GET['id']) {
            $users = ParseUser::getCurrentUser();
            $user = [
                "firstName" => $users->get("name"),
                "lastName" => $users->get("lastName"),
                "photo" => $users->get("photo"),
                "birthday" => (new \DateTime($users->get("birthday")))->format("d.m.Y"),
                "city" => $users->get("city"),
                "phone" => $users->get("phone")
            ];
            $myEvents = $this->myList(false);
        }
        else {

        }
        return [$user, $myEvents];
    }


    public function myList($idUser = false) {
        if (!$idUser) $idUser = ParseUser::getCurrentUser()->getObjectId();
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
        //echo ParseUser::getCurrentUser()->getObjectId();
        $q->equalTo("participants",$idUser);
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

}