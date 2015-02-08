$(document).ready(function(){


    function GmapStreet(lat, lon) {
        var city, street, num, result;

        $.ajax({
            url: 'http://maps.google.com/maps/api/geocode/json?latlng=' + lat + ',' + lon,
            type: 'POST',
            async: false,
            success: function (data) {
                city = data.results[0].address_components[4].short_name;
                street = data.results[0].address_components[2].long_name;
                num = data.results[0].address_components[0].short_name;
            }
        });
        //location.href = 'http://maps.google.com/maps/api/geocode/json?latlng=' + lat + ',' + lon;
        result = city + ', ' + street + ', ' + num;

        return result;
    }


    $('.js-location').each(function(){
        var lat = $(this).data('lat');
        var lon = $(this).data('lon');

        $(this).find('.js-location-text').text(GmapStreet(lat, lon));
    });

    var lat, lan;

    var gMap = function gMap() {
        var settings = {
            center: new google.maps.LatLng(lat, lan),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map"), settings);

        map = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lan),
            map: map
        });

    }


});