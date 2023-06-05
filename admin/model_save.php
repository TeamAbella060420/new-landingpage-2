<?php
// Enable error reporting and display
error_reporting(E_ALL);
ini_set('display_errors', 1);


include "connection.php";

$title = $_POST['title'];
$id = $_POST['data_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$distance = $_POST['distance'];
$attention = $_POST['attention'];
$live = $_POST['live'];
$tag = $_POST['tag'];
$trueuser = $_POST['trueuser'];
$surevideo = $_POST['surevideo'];
$des = $_POST['des'];

// Get the uploaded file information
$file_name = $_FILES['images']['name'];
$file_type = $_FILES['images']['type'];
$file_size = $_FILES['images']['size'];
$file_tmp = $_FILES['images']['tmp_name'];

$result = mysql_query("SELECT COUNT(*) FROM model WHERE id = '$id'");
$count = mysql_result($result, 0);
// Check if the file was uploaded successfully
if (is_uploaded_file($file_tmp)) {
    // Move the uploaded file to the desired destination
    //$upload_dir = "../data/main/";

    if ($id >= 7 ){
        $upload_dir = "../data/goddess/";
    }else{
        $upload_dir = "../data/live/";
    }


    $new_file_name = $id . "_" . basename($file_name);
    $destination = $upload_dir . $new_file_name;
    move_uploaded_file($file_tmp, $destination);
   
 
    // Get the base64-encoded image data
    $image_data = $_POST['image_data'];

    // Decode the image data
    $image = base64_decode($image_data);

    // Save the image to a file
    $image_file_name = $id . "_image.png";
    $image_destination = $upload_dir . $image_file_name;
    file_put_contents($image_destination, $image);

    //$result = mysql_query("SELECT COUNT(*) FROM model WHERE id = '$id'");
    //$count = mysql_result($result, 0);
    if ($count == "1") {
        // Data exists
        mysql_query("update model set name='$name', age='$age', distance='$distance', attention='$attention',live='$live',tag='$tag',trueuser='$trueuser', surevideo='$surevideo', des='$des', images='$new_file_name'  where  id=$id");
        echo "update";
    } else {
        // No data found
        mysql_query("insert into model (id, name, age, distance, attention, live, tag, trueuser, surevideo, des, images) values ('$id','$name', '$age', '$distance', '$attention', '$live', '$tag', '$trueuser', '$surevideo', '$des', '$new_file_name')");
        echo "save";
    }
} else {
if ($count == "1") {
    // Data exists
    mysql_query("update model set name='$name', age='$age', distance='$distance', attention='$attention',live='$live',tag='$tag',trueuser='$trueuser', surevideo='$surevideo', des='$des'  where  id=$id");
    echo "update";
} else {
    // No data found
    mysql_query("insert into model (id, name, age, distance, attention, live, tag, trueuser, surevideo, des, images) values ('$id','$name', '$age', '$distance', '$attention', '$live', '$tag', '$trueuser', '$surevideo', '$des', '$new_file_name')");
    echo "save";
}
    echo "error uploading file";
}

mysql_close($name);
?>
