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
                            <li><a href="worker_home.php">Worker operations</a></li>
                            <li><a href="worker.php">Allocate work</a></li>
                            <li><a href="free.php">Acknowledge <br>completion</a></li>
							<li><a href="../index.html">Log out</a></li>							
						</ul>
                </div>
                <div class="row2col2">
				<p class="content" >Worker details: <br></p>
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
                $result=mysqli_query($db_con,"INSERT INTO worker (id, name, phno, busy) VALUES ('$street','$name','$con','n')");
                /*$result=mysqli_query($db_con,"SELECT * FROM street WHERE name = '" . $street  . "'");
                if (mysqli_num_rows($result) == 1){
                    $result=mysqli_query($db_con,"UPDATE street SET num_comp=num_comp+1 WHERE name = '" . $street  . "'");
                }
                else {
                    $result=mysqli_query($db_con,"INSERT INTO street (hole_pres, name, num_comp) VALUES ('y','$street','1')");                
                }*/
                //echo 'Your complaint details are:<br>';
                echo 'Name: '.$name."<br>";
                echo 'ID: '.$street."<br>";
                echo 'Phone: '.$con."<br>";
                echo 'Worker group successfully registered<br>';
                ?>
                <br><br><a href = "add_worker.php"> <---Back  </a>
                </div>
			</div>
</div>    
</body>
</html>