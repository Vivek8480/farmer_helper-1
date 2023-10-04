<?php
echo "welcome to stage where we are ready to get connected to a database <br>";
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
// create a connection 
$conn = mysqli_connect($servername, $username, $password);
if (!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}

echo "Connection was successful";

?>