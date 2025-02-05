# Gunakan PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install ekstensi PHP yang diperlukan
RUN docker-php-ext-install pdo pdo_mysql

# Pastikan Apache mendengarkan port yang benar
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Salin semua file Laravel ke dalam container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Composer dan dependency Laravel
RUN apt-get update && apt-get install -y unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Setel izin untuk Laravel
RUN chmod -R 777 storage bootstrap/cache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


# Pastikan Laravel menggunakan port yang diberikan oleh Railway
ENV PORT 8080
EXPOSE 8080

# Jalankan Apache
CMD ["apache2-foreground"]
