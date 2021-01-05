<?php
$servername='localhost';
$username='root';
$con=mysqli_connect($servername,$username);
if(!$con){
die("connection error:".mysqli_connect_error());
}
mysqli_select_db($con,'db1');
?>