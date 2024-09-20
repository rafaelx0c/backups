<?php
$command = escapeshellcmd('python3 /path/to/read_sensor.py');
$output = shell_exec($command);
$distance = trim($output);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HC-SR04 Sensor Data</title>
</head>
<body>
    <h1>HC-SR04 Sensor Data</h1>
    <p>Distance: <?php echo htmlspecialchars($distance); ?> cm</p>
</body>
</html>
