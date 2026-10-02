<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');/*nazev databaze*/

$db=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $myusername = $_POST['username'];
    $mypassword =  $_POST['password'];
    $sql="SELECT username, password FROM users WHERE username = '$myusername' ;
    $result = mysqli_query($db, $sql);
}
?>