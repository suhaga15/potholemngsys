<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Check street</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script>
			function clicked(){
			var x; 
			x = document.getElementById('nameCheck').value;
			if(x !=""){
				//document.getElementById('greeting').innerHTML='Hi, '+x+'! Welcome to my site!';
				return true;
				}
				else{
					document.getElementById('errorMsg').innerHTML='<font color="red">(required) Name:</font>';
					return false;
				}				
			}
		</script>
	</head>
	<body>		
		<div class="main">
			<div class="row1">
				<p class="welcome"> Check street for potholes </p>
				<img src="logo.jpg"/>
			</div>
			<div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
							<li><a href="../index.html">Home</a></li>
							<li><a href="complaint.php">Register complaint</a></li>
						</ul>
				</div>
				<div class="row2col2">
				<p class="content" id="greeting">Enter street name to check for potholes on the street: </p>
				<form action="show_pothole.php" method="post" onSubmit='return clicked();'>
					<b id="errorMsg">Street Name: </b>
					<input type="text" id="nameCheck" name='street'/>
					<input type="submit" value="submit" onClick="clicked()" />
				</form>
				</div>
			</div>

		</div>
		
	</body>
</html>