<?php

    $hotelsFiltrati = [];

    foreach($hotels as $hotel){
        if(search($hotel)  && parking($hotel)  && vote($hotel)  && distance($hotel)){
            $hotelsFiltrati[] = $hotel;
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

?>