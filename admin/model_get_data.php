<?php
include "connection.php";

$model_query = mysql_query("SELECT * FROM model");
$model_url = [];
while ($row = mysql_fetch_array($model_query, MYSQL_ASSOC)) {
  $model_url[$row['id']] = array(
    'uid' => $row['uid'],
    'name' => $row['name'],
    'age' => $row['age'],
    'distance' => $row['distance'],
    'attention' => $row['attention'],
    'live' => $row['live'],
    'tag' => $row['tag'],
    'trueuser' => $row['trueuser'],
    'surevideo' => $row['surevideo'],
    'des' => $row['des'],
    'images' => $row['images']
  );
}
//$model_json = json_encode($model_url);
//echo print_r($model_url[2]);
?>


