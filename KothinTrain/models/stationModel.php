<?php

  require_once "db.php";
  /*
  $city = $_POST['city'];
  $address = $_POST['address'];
  $hotline_number = $_POST['hotline_number'];

  $stations = ['', 'city'=>$city, 'address'=> $address, 'hotline_number'=>$hotline_number];
  */
  function insertstation($stations){
    $con = getConnection();

    $sql = "INSERT into stations VALUES ('', '{$city}', '{$address}', '{$hotline_number}')";

    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: ../../views/viewStationAdmin.php');
    } else {
      echo "<h2>Database error!</h2>";
    }

    return $status;
  }
  
  function deletestation($stations){
    $con = getConnection();

    if(isset($_GET['delete'])) {
      $station_id = $_GET['delete'];
      $sql = "DELETE FROM stations WHERE station_id = $station_id";
      $result = mysqli_query($con, $sql);
  
      if($result) {
        echo "<h2>Record deleted successfully</h2>";
        header('location: ../../views/admin/viewStationAdmin.php');
      } else {
        echo "<h2>Error deleting record: </h2>" . mysqli_error($con);
      }
  
      mysqli_close($con);
      
    }
    return $status;
  
  }
  
  ?>