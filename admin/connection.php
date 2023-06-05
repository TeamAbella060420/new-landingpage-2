<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root***";
$dbname = "mq_links";
//$conn = new mysqli($servername, $username, $password, $dbname);
$link = mysql_connect($servername, $username, $password);

// Select database
mysql_select_db($dbname, $link);

?>
