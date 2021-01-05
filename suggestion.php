<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--########################### BOOTSTRAP CDN ##########################################  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!--########################### JAVASCRIPT CODE ########################################  -->
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>
	<br/>
	<br/>
	<br/>
	<div class="container text-center jumbotron">
		<h3><b>The Autocomplete Coconumdrum:</b></h3>
			<!--###### INPUT FORM ##########-->
			<form action="">
				<div class="form-group">
  				<h4><label for="fname">First name:</label></h4>
  				<input type="text" id="fname" name="fname" autocomplete="off" onkeyup="showHint(this.value)" class="form-control">
  				</div>
			</form>
	</div>
			<!--##### OUTPUT TABLE -->
			<div class="container">
			<table class="table table-hover text-center table-dark" >
				<tr>
					<th class="bg-dark" style="text-align: center; text-transform: uppercase;"><h5>country and their capital</h5></th>
				</tr>
				<tr>
					<td><h5 id="txtHint" style="font-weight: bold;"></h5></td>
				</tr>
			</table>
		</div>
</body>
</html>