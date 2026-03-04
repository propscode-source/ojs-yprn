FROM php:8.2-apache

# Install sistem dependensi
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql xml zip gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

WORKDIR /var/www/html

# Salin file aplikasi
COPY . .

# Jalankan Composer untuk OJS
# Menggunakan --no-interaction agar tidak berhenti menunggu input
RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN cd lib/pkp && composer install --no-dev --optimize-autoloader --no-interaction

# Atur izin akses folder
RUN chown -R www-data:www-data /var/www/html

# Gunakan port 80 agar sinkron dengan konfigurasi default Apache
EXPOSE 80
