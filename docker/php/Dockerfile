FROM php:8.2-fpm-buster

RUN apt-get update && apt-get install -y curl

WORKDIR /var/www/sensor-page

COPY php.ini /usr/local/etc/php/conf.d/docker-php-config.ini