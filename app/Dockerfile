# Stage 1: Build PHP dependencies & Frontend Assets
FROM composer:latest AS composer

FROM php:8.3-fpm-alpine AS builder

# Install system dependencies, PHP extensions, & Node.js/NPM
RUN apk add --no-cache \
        zip \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev \
        postgresql-dev \
        nodejs \
        npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) pdo pdo_pgsql gd

WORKDIR /var/www/html

# 1. Install Composer Dependencies
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 2. Install Node.js Dependencies & Build Vite Assets (Fix Vite Error)
COPY package*.json ./
RUN npm ci || npm install

# Copy seluruh source code
COPY . .

# Run Build Scripts
RUN composer run-script post-autoload-dump \
    && npm run build

# Stage 2: Final runtime image
FROM php:8.3-fpm-alpine

# Install runtime dependencies (Nginx, Supervisor, PostgreSQL client library)
RUN apk add --no-cache nginx supervisor libpq libpng libjpeg-turbo freetype \
    && docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html

# Copy hasil build dari Stage 1
COPY --from=builder /var/www/html /var/www/html

# Copy Nginx & Supervisor configuration
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Set izin akses folder storage & cache Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]