FROM php:8.1-fpm

RUN apt-get update && apt-get install curl -y

WORKDIR /var/www/html

RUN usermod -u 1000 www-data
COPY --chown=www-data:www-data . /var/www/html
USER www-data