<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost"; // or your Raspberry Pi hostname
$username = "admin"; // replace with your database username
$password = "1234"; // replace with your database password
$dbname = "DistanceMeasurements"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT distance, measured_at FROM measurements ORDER BY measured_at";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Send the data as JSON
header('Content-Type: application/json'); // Set the correct content type
echo json_encode($data);

$conn->close();
?>
