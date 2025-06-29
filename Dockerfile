FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Create the start script with fallback port 8000
RUN echo '#!/bin/sh\nPORT_NUMBER=${PORT:-8000}\nphp artisan serve --host=0.0.0.0 --port=$PORT_NUMBER' > /start.sh \
    && chmod +x /start.sh

EXPOSE 8000

CMD ["/start.sh"]
