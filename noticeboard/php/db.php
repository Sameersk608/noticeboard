<?php
$server='localhost';
$username="root";
$password="";
$db='events';

$conn=new mysqli($server,$username,$password,$db);

if($conn->connect_error){
    echo '<script>alert("Error on Connecting to Database")</script>';
    die("Connection Failed: ".$conn->connect_error);
}
?>