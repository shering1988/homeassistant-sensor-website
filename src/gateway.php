<?php

// configure all necessary home assistance parameters her
define("HOMEASSISTANT_URL", "https://example.com");
define("SENSOR_KEY", "sensor");
define("BEARER_TOKEN", "token");

header('Content-Type: application/json');

// add a new curl request for any additional sensors
$ch = curl_init(HOMEASSISTANT_URL . '/api/states/sensor.' . SENSOR_KEY);
$authorization = "Authorization: Bearer " . BEARER_TOKEN;
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo json_encode(
    [
        SENSOR_KEY => json_decode($result, true)
    ]
);