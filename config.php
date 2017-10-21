<?php
     $db_con = mysql_connect("localhost","root","abc123");
     if (!$db_con){
          die('Could not connect: ' . mysql_error());
     }
     mysql_select_db("my_data", $db_con);
?>