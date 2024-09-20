<?php
// Set the content type to JSON
header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "sensor_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select the latest 100 distance readings
$sql = "SELECT sensor1_distance, sensor2_distance, recorded_at 
        FROM distance_readings 
        ORDER BY recorded_at DESC 
        LIMIT 100";

// Execute the query and fetch results
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    // Fetch each row of data
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the database connection
$conn->close();

// Encode data as JSON and output it
echo json_encode($data);
?>
