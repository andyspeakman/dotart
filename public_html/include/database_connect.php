<?php

/* Connecting to the server and  select the database: */
$link = mysql_connect("localhost:3306", "dotart", "d0t4rt")
   or die("Database error while connecting: " . mysql_error());

mysql_select_db("dotart")
   or die("Database error while choosing database: Unable to select database");

?>
