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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
	
<!-- Jquery CDN -->
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script> 
	<script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> 
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
	<div class="container">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 text-center jumbotron">
		 <h3>Add Expenses Here.</h3>
		 <div>
		 <form action="" method="post">
		 	<div class="form-group">
		 		<label for="name">Type description here</label>
		 		<input type="text" name="pname" id="name" autocomplete="off" class="form-control">
		 	</div>
		 	<div class="form-group">
		 		<label>Type cost(in Rs.)</label>
		 		<input type="number" name="cost" class="form-control">
		 	</div>
		 	<div class="form-group">
		 		<label>Select date</label>
		 		<input type="date" name="date"  id="date" class="form-control">
		 	</div>
		 	<div class="form-group">
		 		<input type="submit" name="submit" class="btn btn-danger">
		 	</div>
		 </form>
		</div>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 shadow-lg">
			<h3 class="text-center" style="font-weight:bold;color:white;">All data shown here</h3>
			<table class="table table-hover text-center">
				<tr>
					<th class="bg-danger text-center">Description</th>
					<th class="bg-warning text-center"><b>Cost</b></th>
					<th class="bg-danger text-center"><b>Date</b></th>
					<th colspan="2" class="bg-warning text-center">Action</th>
				</tr>
		</div>
	</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
			$description=$_POST['pname'];
			$cost=$_POST['cost'];
			$date=$_POST['date'];
		    $sql="insert into expenses(Description,cost,date)values('$description',$cost,'$date')";
		    $result=mysqli_query($con,$sql);
		    if($result){
		   	?>
		   		<meta http-equiv="refresh" content="0;http://localhost/Admin_Panel/A_Personal_Accounts_Manager/create">
		   	<?php
		   }
	}
			$sql="select *from expenses";
			$result=mysqli_query($con,$sql);
			$num=mysqli_num_rows($result);
			while($row=mysqli_fetch_array($result)){
				echo "<tr><td class='bg-warning'>".$row['Description']."</td>";
				echo "<td class='bg-danger'>".$row['cost']."</td>";
				echo "<td class='bg-warning'>".$row['date']."</td>";
				echo "<td class='bg-danger'><a href='update.php?id=$row[id]&description=$row[Description]&cost=$row[cost]&date=$row[date]' class='btn btn-primary'>Edit</a></td>";
				echo "<td class='bg-danger'><a href='delete.php?id=$row[id]' class='btn btn-warning'>Delete</a></td></tr>";
				}
			?>
			</table>
</body>
</html>