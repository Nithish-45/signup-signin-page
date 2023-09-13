<?php
$host="localhost";
$user="root";
$password="";
$db="userdata";

$conn=new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    die("connection failed".connect_error);
}
else{
    // echo "Successfully connected";
}

?>