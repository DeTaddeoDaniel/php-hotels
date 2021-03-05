<?php

    include 'database.php';

    $hotelsFiltrati = [];

    // $hotels = $_GET['hotels'];

    foreach($hotels as $hotel){
        if(search($hotel)  && parking($hotel)  && vote($hotel)  && distance($hotel)){
            array_push( $hotelsFiltrati, $hotel);
        }
    }

    function search($hotel){
        return true;
    }

    function parking($hotel){
        return true;
    }

    function vote($hotel){
        return true;
    }

    function distance($hotel){
        return true;
    }

    echo json_encode($hotelsFiltrati);
?>