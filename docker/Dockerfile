FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libxml2-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_pgsql \
        pgsql \
        gd \
        mbstring \
        xml \
        zip \
        opcache

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . .

RUN mkdir -p cache public files \
 && chown -R www-data:www-data /var/www/html \
 && chmod -R 775 cache public files

EXPOSE 80
