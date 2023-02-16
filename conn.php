<?php
session_start();
$conn="";
$conn=mysqli_connect("localhost","root","","faith_church");
if(!$conn){
    echo "connection failed";
}

?>