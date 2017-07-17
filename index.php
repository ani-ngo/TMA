<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db549595537";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT category_id, image FROM oc_category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["category_id"]. " - Image: " . $row["image"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
