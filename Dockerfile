# Use the official PHP image with the latest PHP 8.x version
FROM php:8.2-cli

# Set working directory in the container
WORKDIR /var/www/html

# Install system dependencies and PHP extensions required by CodeIgniter 4
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath opcache intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the current project to the working directory in the container
COPY . /var/www/html

# Set correct file permissions
RUN chown -R www-data:www-data /var/www/html

# Install dependencies using Composer
RUN composer install

# Expose port 8080 for the PHP built-in server
EXPOSE 8088

# Start CodeIgniter's built-in server
CMD ["php", "spark", "serve", "--host=192.168.26.65", "--port=8088"]
