# Gunakan PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install ekstensi PHP yang diperlukan
RUN docker-php-ext-install pdo pdo_mysql

# Salin semua file Laravel ke dalam container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Composer dan dependency Laravel
RUN apt-get update && apt-get install -y unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Beri izin ke storage dan bootstrap
RUN chmod -R 777 storage bootstrap/cache

# Jalankan Laravel dengan Apache
CMD ["apache2-foreground"]
