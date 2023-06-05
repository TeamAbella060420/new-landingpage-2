
<?php
header('Access-Control-Allow-Origin: *');
// Establish a database connection
$host = '127.0.0.1';
$user = 'root';
$pass = 'root***';
$db = 'mq_links';
$conn = new mysqli($host, $user, $pass, $db);

    $result = $conn->query('SELECT * FROM model');
    $model = [];
    while ($row = $result->fetch_assoc()) {
        $model[] = $row;
    }
    // Set the response headers
    header('Content-Type: application/json');
    // Return the model as JSON
    echo json_encode($model);
?>
