# HomeAssistant Public Sensor Output Website #

Basic website to retrieve and output sensor data from a HomeAssistance instance.
The data is updated every 5 seconds or when page comes back from background process.

This is just a rough implementation for a specific use-case and could be easily extended and improved. Feel free to fork or add some PRs for improvement if you like.

## Requirements

* Docker Compose
* Configured API Access via long-life-token to your local HA instance or your exposed instance via Nabu Casu: [Read more](https://developers.home-assistant.io/docs/api/rest)

## Installation

* run `docker compose up -d` to start up the containers
* do all necessary configurations:

| File        | Parameter         | Description                                                                                            |
|-------------|-------------------|--------------------------------------------------------------------------------------------------------|
| index.html  | YOUR_TITLE        | title of your sensor page                                                                              |
| index.html  | YOUR_SUB_TITLE    | sub title of your sensor page                                                                          |
| main.js     | DOMAIN            | the domain where you host your sensor page                                                             |
| main.js     | SENSOR_KEY        | the sensor key you want to read from home assistant (has to be the same as `SENSOR_KEY` in gateway.php) |
| gateway.php | HOMEASSISTANT_URL | url to your homeassistant instance                                                                     |
| gateway.php | SENSOR_KEY        | the name of the homeassistant sensor you want to read from the home assistant API                      |
| gateway.php | BEARER_TOKEN      | your bearer token to authenticate on your homeassistant instance                                       |

* open http://localhost:3267/index.html
 
## Example

![alt text](https://github.com/shering1988/homeassistant-sensor-website/blob/main/example.png?raw=true)
