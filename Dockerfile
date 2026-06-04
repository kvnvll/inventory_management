FROM php:8.4-cli

# System dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    sqlite3 \
    && docker-php-ext-install zip gd pdo pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy application
COPY . .

# Laravel setup
RUN mkdir -p database \
    && touch database/database.sqlite

# Install dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Permissions
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache

RUN chmod -R 775 storage bootstrap/cache

# Laravel optimization
RUN php artisan config:clear || true
RUN php artisan route:clear || true
RUN php artisan view:clear || true

EXPOSE 8080

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}