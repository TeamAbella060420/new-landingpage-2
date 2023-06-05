<?php

 include "connection.php";

$title =  $_POST['title'];
$id =$_POST['data_id'];
$link =$_POST['link'];
$result = mysql_query("SELECT COUNT(*) FROM links WHERE id = '$id'");
$count = mysql_result($result, 0);
  if($count == "1") {
    // Data exists
    mysql_query("update links set link='$link', title='$title' where  id=$id");
	echo "update";
  } else {
	
    // No data found
	 mysql_query("insert into links (id,link, title)values ('$id','$link', '$title')");
   	 echo "save";
  }
mysql_close($link);


?>
