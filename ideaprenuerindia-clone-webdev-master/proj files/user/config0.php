<?php
$servername="localhost";
$username="root";
$password="";
$database="web_development";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
    echo "error occured".mysqli_connect_error();

?>
