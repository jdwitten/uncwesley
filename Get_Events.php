<php?


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







?>
