<<<<<<< HEAD

# Use the official PHP image with Apache
FROM php:7.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the application code to the container
COPY . /var/www/html

# Install required PHP extensions (e.g., MySQL, PDO)
RUN docker-php-ext-install mysqli pdo pdo_mysql



# Expose port 80 for HTTP traffic
EXPOSE 80

# Use the default command to start Apache
CMD ["apache2-foreground"]
=======
# Use an official PHP image with Apache
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Copy project files to /var/www/html
COPY . /var/www/html

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
>>>>>>> 60b29bb18524458d89b5510aff8f2849b29f7674
