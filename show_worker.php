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
				<p class="welcome"> Allocate work </p>
				<img src="logo.jpg"/>
            </div>
            <div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
                            <li><a href="worker_home.php">Worker operations</a></li>
                            <li><a href="free.php">Acknowledge completion</a></li>
                            <li><a href="add_worker.php">Add worker group</a></li>
                            <li><a href="../index.html">Log out</a></li>
						</ul>
                </div>
                <div class="row2col2">
				<p class="content" >Work allotment: <br></p>
                <?php
                $db_con = mysqli_connect("localhost","root","","pothole");
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $workerid = $_POST["id"];
                $result=mysqli_query($db_con,"SELECT * FROM street ORDER BY num_comp DESC LIMIT 1");
                if (mysqli_num_rows($result) == 1){
                    $record = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    echo 'Worker group with ID '.$workerid.' has been assigned to the street '.$record['name'].'<br>';
                    //echo 'Number of complaints: '.$record['num_comp']."<br>";
                    $result=mysqli_query($db_con,"UPDATE street SET num_comp = '0' WHERE name='".$record['name']."'");
                    $result=mysqli_query($db_con,"UPDATE worker SET busy = 'y' WHERE id='".$workerid."'");
                    //$result=mysqli_query($db_con,"DELETE FROM worker WHERE id='".$workerid."'");                    
                }
                else
                    echo'No potholes are available to tend to<br>';
                ?>
                <br><br><a href = "worker.php"> <---Back  </a>
                </div>
			</div>
</div>    
</body>
</html>