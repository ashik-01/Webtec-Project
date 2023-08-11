
<?php

  include_once "../assets/header.php";
	//include_once "../assets/footer.php";
  //require_once "databaseCon.php";
  include '../Models/databaseCon.php';

	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Station</title>
		<!-- <link rel="stylesheet" href="../assets/style.css" /> -->
		<link rel="stylesheet" href="../assets/headStyle.css" />
    <link rel="stylesheet" href="../assets/footerStyle.css" />

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
  <div class ="main">
  <h2> Station Details</h2>
  </div>
  <br><br>
    <table>
    
  <tr>
<th>Station ID</th>
<th>City</th>
<th>Address</th>
<th>Hotline Number</th>
  </tr>

  <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM stations";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";

                                    echo "<td><center>{$row['station_id']}</center></td>";
                                    echo "<td><center>{$row['city']}</center></td>";
                                    echo "<td><center>{$row['address']}</center></td>";
                                    echo "<td><center>{$row['hotline_number']}</center></td>";

                                    echo "</tr>";
                                }
                            } else {
                                echo "<td colspan=\"6\">No data found</td>";
                            }


                            ?>

	</table>
</form><br><br>

</body>
</html>

<?php



  /* search for name in database using php */
  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "select * from user_data where username like '%$search%'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th><center>{$row['username']}</center></th>";
        echo "<td><center>{$row['email']}</center></td>";
        echo "</tr>";
      }
    } else {
      echo "No results found";
    }
  }

?>