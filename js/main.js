document.addEventListener("visibilitychange", function() {
    if (!document.hidden){
        location.reload();
    }
});

async function getData() {
    try {
        const response = await fetch("https://YOUR_DOMAIN/gateway.php");

        return await response.json();
      } catch (error) {
        return null;
      }
}

const updateData = async function () {
    var data = await getData();

    if(data) {
        document.getElementById("currentEnergy").innerHTML = data.pv.state + " W";
        document.getElementById("currentTemperatur").innerHTML = data.weather.attributes.temperature + " °C";
        document.getElementById("currentClouds").innerHTML = data.weather.attributes.cloud_coverage + " %";
    }
}

updateData();

window.setInterval("updateData()", 5000);