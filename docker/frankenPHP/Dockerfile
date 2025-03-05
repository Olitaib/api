FROM dunglas/frankenphp:latest-builder-alpine


RUN install-php-extensions \
    pcntl \
    pgsql \
    pdo_pgsql \
    intl \
    bcmath \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY Caddyfile /etc/caddy/Caddyfile

COPY . /var/www/html

ENTRYPOINT ["php", "artisan", "octane:frankenphp", "--workers=4"]
