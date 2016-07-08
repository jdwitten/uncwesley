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

$query = "SELECT fname, lname, content, date FROM uncwesley.prayers JOIN uncwesley.users on senderID = userID";
$result = $conn->query($query);
$prayers = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $prayer['name'] = $row['fname'] . $row['lname']; 
        $prayer['date'] = $row['date']; 
        $prayer['content'] = $row['content'];
        $prayer[] = $event;
    }
} 
$conn->close();
echo json_encode($prayers);



?>

