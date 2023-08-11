
<?php

  require_once '../../Models/db.php';

	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Station</title>
		<!-- <link rel="stylesheet" href="../assets/style.css" /> -->

    <style>
    .main{
      background-color: Thistle;
      width: 200px;
      height: 40px;
      margin: 0 auto;
      text-align: center;
      transition: width 2s linear 1s;

    }

    .main:hover{
      width: 250px;
    }

    table{
      border: 2px solid black;
      border-collapse: collapse;
      width: 70%;
      margin: 0 auto;
    }

    th,td{
      border: 2px solid black;
      padding: 5px;

    }
    th{
      background-color: PowderBlue;
      color: black;
      height: 30px;
    }
		</style>

  </head>
    <body>
      <form action="../../controllers/addStationCheck.php" method="post" enctype="multipart/form-data" >
      <div class="container">
        <h2>Add Station Details</h2>
        <br>
        <table style:"width=400px;" >
          <tr>
            <td><label for="city">City</label></td>
            <td><input type="text" autocomplete="off" name="city" value=""></td>
          </tr>
          <tr>
            <td><label for="address">Address</label></td>
            <td><input type="text" autocomplete="off" name="address" value=""></td>
          </tr>
          <tr>
            <td><label for="hotline_number">Hotline Number</label></td>
            <td><input type="number" autocomplete="off" name="hotline_number" value=""></td>
          </tr>
          <tr>
            <td colspan="2">
              <center><input type="submit" name="btn" value="Insert"></center>
            </td>
          </tr>
        </table>
      </div>
      </form>

    </body>
</html>

