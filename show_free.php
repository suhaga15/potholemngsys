<?php session_start(); 
//include('config.php');
?>
<!doctype html>
<html>
<head>
    <title> Worker operations </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="main">
			<div class="row1">
				<p class="welcome"> Free workers </p>
				<img src="logo.jpg"/>
            </div>
            <div class="row2">
				<div class="row2col1">
					Navigation
					<hr align="left" width=75%>						
						<ul>
                            <li><a href="worker_home.php">Worker operations</a></li>
                            <li><a href="worker.php">Allocate work</a></li>
                            <li><a href="add_worker.php">Add worker group</a></li>
                            <li><a href="../index.html">Log out</a></li>
						</ul>
                </div>
                <div class="row2col2">
				<p class="content" >Work acknowledgement: <br></p>
                <?php
                $db_con = mysqli_connect("localhost","root","","pothole");
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $workerid = $_POST["id"];
                //$result=mysqli_query($db_con,"SELECT * FROM street ORDER BY num_comp DESC LIMIT 1");
                //$record = mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo 'Worker group with ID '.$workerid.' has been deallocated<br>';
                //echo 'Number of complaints: '.$record['num_comp']."<br>";
                //$result=mysqli_query($db_con,"UPDATE street SET num_comp = '0' WHERE name='".$record['name']."'");
                $result=mysqli_query($db_con,"UPDATE worker SET busy = 'n' WHERE id='".$workerid."'");
                //$result=mysqli_query($db_con,"DELETE FROM worker WHERE id='".$workerid."'");                    
                ?>
                <br><br><a href = "free.php"> <---Back  </a>
                </div>
			</div>
</div>    
</body>
</html>