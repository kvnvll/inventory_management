FROM php:8.4-apache

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

RUN a2enmod rewrite

# REMOVE ALL APACHE CONFIGS
RUN rm -f /etc/apache2/mods-enabled/mpm_*.load
RUN rm -f /etc/apache2/mods-enabled/mpm_*.conf

# ENABLE ONLY PREFORK
RUN a2enmod mpm_prefork

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/*.conf

EXPOSE 80

CMD ["apache2-foreground"]