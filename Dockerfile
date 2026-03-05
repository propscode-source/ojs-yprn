FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    unzip \
    git \
    && docker-php-ext-install pdo_pgsql pgsql mbstring xml zip opcache

WORKDIR /var/www/html

COPY . .

RUN mkdir -p cache public files \
 && chown -R www-data:www-data /var/www/html \
 && chmod -R 775 cache public files

EXPOSE 9000
