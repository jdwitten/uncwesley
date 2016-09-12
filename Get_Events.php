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

$query = "SELECT * from uncwesley.events WHERE date > curdate() ORDER BY date ASC";
$result = $conn->query($query);
$events = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $event['title'] = $row['title']; 
        $event['date'] = $row['date']; 
        $event['description'] = $row['description']; 
        $event['imageURL'] = $row['imageURL'];
        $event['location'] = $row['location'];
        
        $events[] = $event;
    }
} 
$conn->close();
echo json_encode($events);



?>
