FROM php:8.2-fpm-alpine

RUN apk add --no- Whitelist zip libpng-dev libjpeg-turbo-dev freetype-dev nginx supervisor

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=80