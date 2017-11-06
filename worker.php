<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Worker Operations</title>
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
					document.getElementById('errorMsg').innerHTML='<font color="red">(required) Worker ID:</font>';
					return false;
				}				
			}
		</script>
	</head>
	<body>		
		<div class="main">
			<div class="row1">
				<p class="welcome"> Allocate work </p>
				<img src="logo.jpg"/>
			</div>
			<div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
							<li><a href="worker_home.php">Worker operations</a></li>
							<li><a href="free.php">Acknowledge <br>completion</a></li>
							<li><a href="add_worker.php">Add worker group</a></li>
							<li><a href="../index.html">Log out</a></li>
						</ul>
				</div>
				<div class="row2col2">
				<p class="content" id="greeting">Enter worker ID to allocate work: </p>
				<form action='show_worker.php' method='post' onSubmit='return clicked();'>
					<b id="errorMsg">Worker ID: </b>
					<input type="text" id="nameCheck" name='id'/>
					<input type="submit" value="submit" onClick="clicked()" />
                </form>
                <?php
                $db_con = mysqli_connect("localhost","root","","pothole");
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result= mysqli_query($db_con,"SELECT * FROM worker WHERE busy='n'");				
                echo "<center><h1> User List:</h1><table border='1'>
                    <tr>
                    <td><b>ID</b></td>
					<td><b>Name</b></td>
					<td><b>Phone</b></td>
                    </tr>";
                    
                while($record = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo"<td>" . $record['id'] . "</td>";
					echo"<td>" . $record['name'] . "</td>";
					echo"<td>" . $record['phno'] . "</td>";
                    echo"</tr>";
                    }
                echo"</table>
                </center>";
                ?>
				</div>
			</div>

		</div>
		
	</body>
</html>