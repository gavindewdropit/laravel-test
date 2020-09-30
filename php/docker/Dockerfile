FROM php:7.4.10-fpm-alpine3.12

RUN docker-php-ext-install pdo pdo_mysql bcmath

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer