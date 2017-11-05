<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Register romplaint</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script>
			function clicked(){
			var n, s, c; 
			n = document.getElementById('nameCheck').value;
			s = document.getElementById('strcheck').value;
			c = document.getElementById('concheck').value;
			if(n!="" && s!="" && c!="" && c>0 && c<6){
				//document.getElementById('greeting').innerHTML='Hi, '+x+'! Welcome to my site!';
				return true;
				}
				else if(n==""){
					document.getElementById('name').innerHTML='<font color="red">(required) Name:</font>';
					return false;
				}
				else if(s==""){
					document.getElementById('street').innerHTML='<font color="red">(required) Street:</font>';
					return false;
				}	
				else if(c==""){
					document.getElementById('condition').innerHTML='<font color="red">(required) Condition:</font>';
					return false;
				}	
				else if(c<0 || c>6){
					document.getElementById('condition').innerHTML='<font color="red">Value should be betwen 1 & 5 Condition:</font>';
					return false;
				}				
			}
		</script>
	</head>
	<body>		
		<div class="main">
			<div class="row1">
				<p class="welcome"> Register your complaint </p>
				<img src="logo.jpg"/>
			</div>
			<div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
							<li><a href="../index.html">Home</a></li>
							<li><a href="pothole.php">View potholes</a></li>
						</ul>
				</div>
				<div class="row2col2">
				<p class="content" >Enter details to submit complaint and note down the associated complaint ID for checking status of your complaint in the future.<br>
				Mention how bad the pothole is on a scale of 1 to 5 in the condition field</p>
				<form action='show_complaint.php' method='post' onSubmit="return clicked();">
					<b id="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<input type="text" id="nameCheck" name="name"/>
					
					<br><br><b id="street">Street:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<input type="text" id="strcheck" name="street"/>
					
					<br><br><b id="condition">Condition(1-5):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<input type="text" id="concheck" name="condition"/>
					
					<br><br><input type="submit" value="Submit" onClick="clicked()" />
				</form>
				</div>
			</div>

		</div>
		
	</body>
</html>