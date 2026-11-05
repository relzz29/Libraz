# Gunakan image resmi PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install ekstensi dan dependensi sistem yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install ekstensi PHP untuk PostgreSQL (Supabase), MySQL, dan manipulasi string/gambar
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# Salin Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Atur working directory
WORKDIR /var/www/html

# Salin semua file proyek ke container
COPY . /var/www/html

# Konfigurasi Apache DocumentRoot ke folder /public Laravel
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Install dependensi Laravel menggunakan composer
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Berikan izin folder storage dan bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Port default
EXPOSE 80

# Jalankan migrasi dan nyalakan Apache
CMD ["sh", "-c", "php artisan config:clear && php artisan route:clear && php artisan view:clear && apache2-foreground"]
