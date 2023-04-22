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
                $bid=$_GET['id'];
               // die("welcome");


              echo $selectquery = "DELETE from user_booking where booking_id='".$bid."'";
              
              mysqli_query($con,$selectquery);
              header('location:display_data.php');
              ?>