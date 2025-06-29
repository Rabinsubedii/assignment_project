# Use PHP 8.2 as base image
FROM php:8.2-cli

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy Laravel project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set correct permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose the default Laravel port
EXPOSE 8000

# Command to start Laravel app, with safe port fallback
CMD sh -c 'PORT_NUMBER=${PORT:-8000}; echo "Starting Laravel on port $PORT_NUMBER"; php artisan serve --host=0.0.0.0 --port=$PORT_NUMBER'
