 <?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//This script will handle login
session_start();

// check if the user is already logged in

$email = $password = "";
$err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(($_POST['email']="")||($_POST['password']=""))
    {
        $err = "Please enter email + password";
    }
    else{
        $email = ($_POST['email']);
        $password = ($_POST['password']);
        echo($_POST['email']);
        echo($_POST['password']);
    }
}
if(empty($err))
{
    $sql = "SELECT email, password FROM user_data WHERE email = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    $param_email = $email;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                      $sql = "SELECT email, password FROM user_data WHERE password = ?";
                        $stmt = mysqli_prepare($link, $sql);
                    mysqli_stmt_bind_result($stmt, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["email"] = $email;
                            $_SESSION["password"] = $password;
                            $_SESSION["loggedin"] = true;
                            //Redirect user to working.php
                            // header("location: working.php");
                            echo($_POST['email']);
                            echo($_POST['password']);
                        }
                    }

                }

    }
}    



?>
