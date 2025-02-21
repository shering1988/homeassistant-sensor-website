const DOMAIN = "http://your-domain.de";
const SENSOR_KEY = "sensor";

document.addEventListener("visibilitychange", function() {
    if (!document.hidden){
        location.reload();
    }
});

async function getDataThroughGateway() {
    try {
        const response = await fetch(DOMAIN + "/gateway.php");

        return await response.json();
    } catch (error) {
        console.error("error reading sensor data", error);
        return false;
    }
}

const updateData = async function () {
    const data = await getDataThroughGateway();

    if(data) {
        document.getElementById("sensorData").innerHTML = data[SENSOR_KEY].state;
    }
}

updateData();

window.setInterval("updateData()", 5000);