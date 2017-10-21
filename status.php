<?php session_start();
include 'config.php';?>
<html>
	<head>
		<title>Check street</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
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
							<li><a href="index.html">Home</a></li>
							<li><a href="complaint.html">Register complaint</a></li>
							<li><a href="status.html">Complaint status</a></li>
						</ul>
				</div>
				<div class="row2col2">
				<p class="content" >Enter street name to check for potholes on the street: </p>
				<form>
					<b id="errorMsg">Street Name: </b>
					<input type="text" id="nameCheck" />
					<input type="button" value="Submit" onClick="clicked()" />
				</form>
				</div>
			</div>

		</div>
		
	</body>
</html>