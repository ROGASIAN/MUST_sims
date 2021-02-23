<?php
echo 'tumefica';
$servername="localhost";
$dbname="MUST";
$dbusername="root";
$dbpassword="";
//establlish connection
$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
//get data from user
$username = $_POST['username'];
$password = $_POST['password'];
//insert query
$sql="INSERT INTO sims value('','$username','$password')";
//excute query
mysqli_query($conn,$sql);
?>