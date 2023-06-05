<?php
include "connection.php";

$link_query = mysql_query("SELECT link,id FROM links");
$link_url =[];
while ($row = mysql_fetch_array($link_query, MYSQL_ASSOC)) {
  $link_url[$row['id']] = $row['link'];
  // Do something with $link_url and $link_title here
}
//echo "<pre>";
//print_r($link_url);
?>
