<?php
error_reporting(0);
include("connect.php");
$id=$_GET['id'];
$sql="delete from expenses where id=$id";
$result=mysqli_query($con,$sql);
?>

<meta http-equiv="refresh" content="0;http://localhost/Admin_Panel/A_Personal_Accounts_Manager/create.php">