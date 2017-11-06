<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Admin Functions</title> 
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>		
		<div class="main">
			<div class="row1">
				<p class="welcome"> Administrator Page </p>
				<img src="logo.jpg"/>
			</div>
			<div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
							<li><a href="worker.php">Allocate work</a></li>
                            <li><a href="free.php">Acknowledge <br>completion</a></li>
                            <li><a href="add_worker.php">Add worker group</a></li>
							<li><a href="../index.html">Log out</a></li>
						</ul>
				</div>
				<div class="row2col2"><p class="content"> Click on the links to allocate work or acknowledge completion of work.</p>
				</div>
			</div>

		</div>
		
	</body>
</html>