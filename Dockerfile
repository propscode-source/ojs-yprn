FROM php:8.2-fpm
ENV MAKEFLAGS="-j1"
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    libxml2-dev \
    unzip \
    git

RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    mbstring \
    xml \
    zip \
    opcache

WORKDIR /var/www/html

COPY . .

RUN chown -R www-data:www-data /var/www/html

RUN mkdir -p cache public files \
 && chmod -R 777 cache public files

EXPOSE 9000
