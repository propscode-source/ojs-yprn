FROM php:8.2-fpm

# install dependency
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    unzip \
    git \
    nginx \
    supervisor

# configure gd
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

# install php extensions
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    gd \
    mbstring \
    xml \
    zip \
    opcache

# copy ojs
WORKDIR /var/www/html
COPY . .

# permission
RUN mkdir -p cache public files \
 && chown -R www-data:www-data /var/www/html \
 && chmod -R 775 cache public files

# nginx config
COPY docker/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD php-fpm -D && nginx -g "daemon off;"
