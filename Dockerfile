FROM php:8.2-cli

# Install system dependencies and PHP extensions needed for Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory inside container
WORKDIR /var/www/html

# Copy all files from your project into the container
COPY . .

# Install PHP dependencies using Composer
RUN composer install --no-dev --optimize-autoloader

# Fix permissions for Laravel storage and cache
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Create start script to cast $PORT as integer
RUN echo '#!/bin/sh\nphp artisan serve --host=0.0.0.0 --port=$(($PORT))' > /start.sh \
    && chmod +x /start.sh

# Expose port (this is optional, mostly for documentation)
EXPOSE 8000

# Run the start script
CMD ["/start.sh"]
