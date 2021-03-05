<?php

    include 'database.php';

    $hotelsFiltrati = [];

    foreach($hotels as $hotel){
        if(search($hotel)  && parking($hotel)  && vote($hotel)  && distance($hotel)){
            array_push( $hotelsFiltrati, $hotel);
        }
    }

    function search($hotel){

        $nameSearch = strtolower($_GET['name']);
        $nameHotel = strtolower($hotel['name']);

        if($nameSearch == ''){
            return true;
        }

        if(strpos($nameHotel, $nameSearch)){
            return true;
        } else {
            return false;
        }
    }

    function parking($hotel){
        $parkingHotel = $hotel['parking'];
        $parkingSearch = $_GET['parking'];

        if($parkingSearch === 'all'){
            return true;
        }

        if ($parkingHotel == $parkingSearch){
            return true;
        } else {
            return false;
        }
    }

    function vote($hotel){
        $voteHotel = $hotel['vote'];
        $voteSearch = $_GET['vote'];

        if($voteSearch === 'all'){
            return true;
        }

        if ($voteHotel >= $voteSearch){
            return true;
        } else {
            return false;
        }
    }

    function distance($hotel){
        $distaceHotel = $hotel['distance_to_center'];
        $distanceSearch = $_GET['distance'];

        if($distanceSearch === 'all'){
            return true;
        }

        if ($distaceHotel <= $distanceSearch){
            return true;
        } else {
            return false;
        }
    }

    echo json_encode($hotelsFiltrati);
?>