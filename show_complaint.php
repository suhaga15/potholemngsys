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
				<p class="welcome"> Register complaint </p>
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
				<p class="content" >Complaint details: <br></p>
                <?php
                $db_con = mysqli_connect("localhost","root","","pothole");
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //$mystreet = $_POST['street'];
                /*$result=mysqli_query($db_con,"SELECT * FROM street WHERE name = '" . $mystreet  . "'");
                if (mysqli_num_rows($result) == 1){
                    $record = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    echo 'Potholes present on street<br>';
                    echo 'Number of complaints: '.$record['num_comp']."<br>";
                }
                else
                    echo'No complaints have been lodged for this street<br>';*/
                $name = $_POST["name"];
                $street = $_POST["street"];
                $con = $_POST["condition"];
                $result=mysqli_query($db_con,"INSERT INTO pothole (name, street, sev) VALUES ('$name','$street','$con')");
                $result=mysqli_query($db_con,"SELECT * FROM street WHERE name = '" . $street  . "'");
                if (mysqli_num_rows($result) == 1){
                    $result=mysqli_query($db_con,"UPDATE street SET num_comp=num_comp+1 WHERE name = '" . $street  . "'");
                }
                else {
                    $result=mysqli_query($db_con,"INSERT INTO street (hole_pres, name, num_comp) VALUES ('y','$street','1')");                
                }
                //echo 'Your complaint details are:<br>';
                echo 'Name: '.$name."<br>";
                echo 'Street: '.$street."<br>";
                echo 'Condition: '.$con."<br>";
                echo 'Complaint successfully registered<br>';
                ?>
                <br><br><a href = "complaint.php"> <---Back  </a>
                </div>
			</div>
</div>    
</body>
</html>