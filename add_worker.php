<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Add worker</title>
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
					document.getElementById('street').innerHTML='<font color="red">(required) ID:</font>';
					return false;
				}	
				else if(c==""){
					document.getElementById('condition').innerHTML='<font color="red">(required) Phone:</font>';
					return false;
				}	
			}
		</script>
	</head>
	<body>		
		<div class="main">
			<div class="row1">
				<p class="welcome"> Add worker group</p>
				<img src="logo.jpg"/>
			</div>
			<div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
                            <li><a href="worker_home.php">Worker operations</a></li>
                            <li><a href="worker.php">Allocate work</a></li>
                            <li><a href="free.php">Acknowledge <br>completion</a></li>
							<li><a href="../index.html">Log out</a></li>
						</ul>
				</div>
				<div class="row2col2">
				<p class="content" >Enter details to register worker group in the database.</p>
				<form action='add_worker_show.php' method='post' onSubmit="return clicked();">
					<b id="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<input type="text" id="nameCheck" name="name"/>
					
					<br><br><b id="street">ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<input type="text" id="strcheck" name="street"/>
					
					<br><br><b id="condition">Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<input type="text" id="concheck" name="condition"/>
					
					<br><br><input type="submit" value="Submit" onClick="clicked()" />
				</form>
				</div>
			</div>

		</div>
		
	</body>
</html>