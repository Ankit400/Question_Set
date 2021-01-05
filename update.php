<?php
error_reporting(0);
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		background-color: #1E90FF;
  	}
  </style>
</head>
<body>
<br>
<div class="container text-center" style="background-color:#FFE4C4;">
  <h1 style="">Expenses Record System</h1>
</div><br><br>
	<div class="container text-center" style="color:white;">
		 <h3>Update or Edit Record Here.</h3>
		 <div>
		<form action="" method="post">
		 	<div class="form-group">
		 		<label for="name">Type description here</label>
		 		<input type="text" name="pname" id="name" value="<?php echo $_GET['description']; ?>" autocomplete="off" class="form-control">
		 	</div>
		 	<div class="form-group">
		 		<label>Type cost(in Rs.)</label>
		 		<input type="number" name="cost" value="<?php echo $_GET['cost']; ?>" class="form-control" >
		 	</div>
		 	<div class="form-group">
		 		<label>Select date</label>
		 		<input type="date" name="date"  id="date"  value="<?php echo $_GET['date']; ?>" class="form-control">
		 	</div>
		 	<div class="form-group">
		 		<input type="submit" name="submit" class="btn btn-danger">
		 	</div>
		 </form>
		 </div>
		</div>
		<?php 
			if(isset($_POST['submit'])){
				$id=$_GET['id'];
				$description=$_POST['pname'];
				$cost=$_POST['cost'];
				$date=$_POST['date'];
				$sql="update expenses set Description='$description',cost=$cost,date='$date' where id=$id";
				$result=mysqli_query($con,$sql);
				if($result){
					header('location:create.php');
				}
			}
		?>
	</body>
	</html>