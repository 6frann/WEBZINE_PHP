FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip

# Installer et activer les extensions PHP nécessaires (GD, Exif, PostgreSQL)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql gd exif

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Installation des dépendances avec composer
RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000
CMD php artisan serve --host=0.0.0.0 --port=10000