<?php

    session_start();
    require_once "../models/userModel.php";
    

    $station_id = $_POST['station_id'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $hotline_number = $_POST['hotline_number'];
    

    $station =['station_id'=>$station_id, 'city'=>$city, 'address'=>$address,'hotline_number'=>$hotline_number];
    $stations = login($user);
