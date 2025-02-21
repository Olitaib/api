FROM php:8.3-fpm-alpine

WORKDIR /var/www/html
COPY composer.* /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
