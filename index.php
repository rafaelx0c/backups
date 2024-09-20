<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Distance Monitoring</title>
    <script>
        function fetchData() {
            fetch('http://192.168.18.77:5000/update')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Data received:', data);
                    document.getElementById('distance').textContent = data.distance + ' cm';
                    if (data.distance >= 12) {
                        document.getElementById('buzzer-status').textContent = 'Buzzer ON';
                    } else {
                        document.getElementById('buzzer-status').textContent = 'Buzzer OFF';
                    }
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });
        }

        setInterval(fetchData, 1000);
    </script>
</head>
<body>
    <h1>Distance Monitoring</h1>
    <p>Distance: <span id="distance">0 cm</span></p>
    <p>Buzzer Status: <span id="buzzer-status">OFF</span></p>
</body>
</html>

