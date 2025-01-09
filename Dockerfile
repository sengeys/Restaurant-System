FROM php:8.1-apache

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the current directory to /var/www/html
COPY . /var/www/html
