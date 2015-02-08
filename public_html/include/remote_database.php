<?php

/* Connecting to the server and  select the database: */
$link = mysql_connect("db610.oneandone.co.uk:3306", "dbo163702141", "Y9sPESky")
   or die("Database error while connecting: " . mysql_error());

mysql_select_db("db163702141")
   or die("Database error while choosing database: Unable to select database");

?>
