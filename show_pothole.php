<?php session_start(); 
//include('config.php');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="main">
			<div class="row1">
				<p class="welcome"> Condition of street </p>
				<img src="logo.jpg"/>
            </div>
            <div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
							<li><a href="../index.html">Home</a></li>
							<li><a href="complaint.php">Register Complaint</a></li>							
						</ul>
                </div>
                <div class="row2col2">
				<p class="content" >The details of the street are as follows: <br></p>
                <?php
                $db_con = mysqli_connect("localhost","root","","pothole");
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $mystreet = $_POST["street"];
                $result=mysqli_query($db_con,"SELECT * FROM street WHERE name = '" . $mystreet  . "'");
                if (mysqli_num_rows($result) == 1){
                    $record = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    echo 'Potholes present on street<br>';
                    echo 'Number of complaints: '.$record['num_comp']."<br>";
                }
                else
                    echo'No complaints have been lodged for this street<br>';
                ?>
                <br><br><a href = "pothole.php"> <---Back  </a>
                </div>
			</div>
</div>    
</body>
</html>