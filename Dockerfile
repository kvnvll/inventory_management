FROM php:8.4-cli
 
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    && docker-php-ext-install zip gd \
    && rm -rf /var/lib/apt/lists/*
 
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
 
WORKDIR /var/www/html
 
COPY . .
 
RUN mkdir -p database && touch database/database.sqlite
 
RUN composer install --no-dev --optimize-autoloader --no-interaction
 
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache
 
RUN chown -R www-data:www-data storage bootstrap/cache database
 
EXPOSE 8080
 
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
 