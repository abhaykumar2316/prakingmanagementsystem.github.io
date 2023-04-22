
<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("parking_management_system",$con);

$sql="INSERT INTO parking_area_detail (first_name,last_name,contact,email,city,parking_zone,two_wheeler,three_wheeler,four_wheeler,six_wheeler,Price1,Price2,Price3,Price4,two_wheeler_f,three_wheele_f,four_wheeler_f,six_wheeler_f,Reserve_Spaces)

VALUES

('$_POST[first_name]','$_POST[last_name]','$_POST[contact]','$_POST[email]','$_POST[city]','$_POST[parking_zone]','$_POST[two_wheeler]','$_POST[three_wheeler]','$_POST[four_wheeler]','$_POST[six_wheeler]','$_POST[Price1]','$_POST[Price2]','$_POST[Price3]','$_POST[Price4]','$_POST[two_wheeler_f]','$_POST[three_wheele_f]','$_POST[four_wheeler_f]','$_POST[six_wheeler_f]','$_POST[Reserve_Spaces]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>
