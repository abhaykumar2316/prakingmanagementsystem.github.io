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
              $selectquery = "SELECT*from user_booking";
              $query = mysqli_query($con,$selectquery);
              $res = mysqli_fetch_array($query);
                  echo $res['email'];
              
              ?>