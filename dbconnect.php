<?php
$servername= "localhost";
$username ="yakoobh";
$password ="";
$dbname ="c9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}


?>