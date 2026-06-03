FROM php:8.4-apache

RUN apt-get update && apt-get install -y 
libzip-dev 
libpng-dev 
zip 
unzip 
git 
&& docker-php-ext-install zip gd 
&& apt-get clean

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN mkdir -p storage/framework/cache 
storage/framework/sessions 
storage/framework/views 
bootstrap/cache

RUN chown -R www-data:www-data storage bootstrap/cache

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' 
/etc/apache2/sites-available/*.conf

EXPOSE 80

CMD ["apache2-foreground"]
