<?php


$host = "us-cdbr-azure-east-c.cloudapp.net";
$user = "bddfe4567fcee0";
$pwd = "aaa47743";
$db = "uncwesley";

// Create connection
$conn = new mysqli($host, $user, $pwd, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * from uncwesley.events";
$result = $conn->query($query);
$events = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $event['title'] = $result['title']; 
        $event['date'] = $result['date']; 
        $event['description'] = $result['description']; 
        $events[] = $event;
    }
} 
$conn->close();
echo json_encode($events);
?>
