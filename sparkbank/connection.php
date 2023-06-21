<?php
//connecting to the databse
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$database = "bank";
//connection
$conn = mysqli_connect($servername, $username, $password, $database);
//die if the connection failed
if(!$conn){
    die("failed");
}
// else{
//     echo "connected";
// }
?>