function fetchSensorData() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'sensor.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('distance').innerHTML = xhr.responseText;
        } else {
            document.getElementById('distance').innerHTML = 'Error fetching data.';
        }
    };
    xhr.send();
}

// Fetch data every 5 seconds
setInterval(fetchSensorData, 5000);

// Fetch data immediately on page load
window.onload = fetchSensorData;
