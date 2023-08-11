<?php

  session_start();
  require_once '../models/db.php';


  //$station_id = $_POST['station_id'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $hotline_number = $_POST['hotline_number'];

  $stations = ['', 'city'=>$city, 'address'=> $address, 'hotline_number'=>$hotline_number];

  if($city == "" || $address == "" || $hotline_number == ""){
    echo "<h2>Missing field(s) detected!</h2><br>";
  } else{
    $con = getConnection();
    
    // Check connection
    if($con === false){
      die("ERROR: Could not connect." . mysqli_connect_error());
    }

    $sql = "INSERT into stations VALUES ('', '{$city}', '{$address}', '{$hotline_number}')";

    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: ../views/admin/viewStationAdmin.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
    
  }

?>