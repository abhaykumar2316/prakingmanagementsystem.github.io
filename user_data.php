<?php 
      define('DB_SERVER', 'localhost');
      define('DB_USERNAME', 'root');
      define('DB_PASSWORD', '');
      define('DB_NAME', 'parking_management_system');

      // Try connecting to the Database
      $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

      //Check the connection
      if($con == false){
          dir('Error: Cannot connect');
      }

 

$sql="INSERT INTO user_booking (first_name, last_name, email, phone_no, city, zone, vehicle, price, vehicle_no,Arrival_Time)

VALUES

('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[phone_no]','$_POST[city]','$_POST[zone]','$_POST[vehicle]','$_POST[price]','$_POST[vehicle_no]','$_POST[Arrival_Time]')";

if(!mysqli_query($con,$sql))

  {

  die('Error: ' . mysql_error());

  }

 header("Location:thankyou.php");

mysqli_close($con)

 ?>