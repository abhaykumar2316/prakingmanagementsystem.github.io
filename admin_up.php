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

 


 
 $sql="INSERT INTO user_data ( user_name, last_name, email, contact, password,role)

VALUES

('$_POST[user_name]','$_POST[last_name]','$_POST[email]','$_POST[contact]','$_POST[password]','$_POST[role]')";

// $sql="INSERT INTO admin_signup (first_name, last_name, email, contact, password)VALUES(".$_POST[first_name].", ".$_POST[last_name].", ".$_POST[email].", ".$_POST[contact].", ".$_POST[password].")";


 
if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

header("Location:admin.php");

 

mysql_close($con);

?>