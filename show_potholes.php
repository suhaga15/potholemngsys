<?php
if (mysql_num_rows($db_query) == 1){
     $record = mysql_fetch_array($db_query);
     if (md5($passcheck) == $record['password']){
	echo "Welcome, " . $usercheck . "! You are now logged in. <br/>";
	$_SESSION['user']= $usercheck;
	$_SESSION['pass']= $passcheck;
     }
      else
	echo "Sorry, wrong password. <br/>";
}
else
     echo "Sorry, wrong username. <br/>";
?>