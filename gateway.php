<?php

header('Content-Type: application/json');
$ch = curl_init('https://YOUR-HOMEASSISTANT-INSTANCE/api/states/sensor.YOUR_SOLAR_SENSOR');
$authorization = "Authorization: Bearer YOUR_BEARER_TOKEN";
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resultEnergy = curl_exec($ch);
curl_close($ch);

$ch = curl_init('https://YOUR-HOMEASSISTANT-INSTANCE.ui.nabu.casa/api/states/weather.forecast_home');
$authorization = "Authorization: Bearer YOUR_BEARER_TOKEN";
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resultWeather = curl_exec($ch);
curl_close($ch);

// you can add additional sensors here

echo json_encode(["pv" => json_decode($resultEnergy, true), "weather" => json_decode($resultWeather, true)]);