# HomeAssistant Public Sensor Output Website #

Basic website to retrieve and output solar sensor data (or any other data) from an HomeAssistance instance.
The data is updated every 5 seconds or when page comes back from background process.

This is just a rough implementation for a specific use-case and could be easily extended and improved. Feel free to fork or add some PRs for improvement if you like.

## Requirements

* Webserver (Apache or Nginx)
* PHP with enabled cUrl (anything above 5.6)
* configured API Access via long-life-token to your local HA instance or your exposed instance via Nabu Casu: [Read more](https://developers.home-assistant.io/docs/api/rest)

## Installation

* Copy all files to an accessible web root.
* Open `index.html` and replace "YOUR_TITLE" with whatever suits you
* Open `js/main.js` and replace "YOUR_DOMAIN" with the domain where you are uploading this website
* Open `gateway.php` 
    * replace "YOUR_BEARER_TOKEN" with the token from your long-life-token
    * replace "YOUR-HOMEASSISTANT-INSTANCE" with the URL or IP to your HA instance
 
## Example

![alt text](https://github.com/shering1988/homeassistant-sensor-website/blob/main/example.png?raw=true)
