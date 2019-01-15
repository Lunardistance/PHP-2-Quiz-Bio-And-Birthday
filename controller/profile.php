<?php


    function generateProfile() {

    include "./model/profile.php";

    $profile = $profileModel->profile();
    date_default_timezone_set('America/New_York');
    $date = date("m-d");
    $age = date_diff(date_create($profile->bday), date_create('now'))->y;
    $dateMatch = (substr($profile->bday, -5)); 
    
    
    include "./views/profile.php";

    }

