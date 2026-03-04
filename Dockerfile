FROM php:8.2-apache

# 1. Install sistem dependensi yang dibutuhkan OJS & Composer
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql xml zip gd

# 2. Install Composer secara resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

WORKDIR /var/www/html

# 3. Salin file aplikasi
COPY . .

# 4. JALANKAN COMPOSER (Ini yang sebelumnya hilang)
# OJS membutuhkan vendor di folder utama dan folder lib/pkp
RUN composer install --no-dev --optimize-autoloader
RUN cd lib/pkp && composer install --no-dev --optimize-autoloader

# 5. Atur izin akses folder (PENTING untuk folder files dan cache)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 6. Gunakan port 80 (standar Apache) agar lebih mudah di Coolify
EXPOSE 80
CMD ["apache2-private", "-D", "FOREGROUND"]
