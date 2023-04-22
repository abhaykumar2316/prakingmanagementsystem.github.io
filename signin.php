<html>

<body>

 

 

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
 


 

$sql="INSERT INTO user_data (user_name, email, password, role, contact)

VALUES

('$_POST[user_name]','$_POST[email]','$_POST[password]','$_POST[role]','$_POST[contact]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysql_error());

  }

 header("Location:thanksingup.php");

mysql_close($con)

?>

</body>

</html>