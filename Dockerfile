
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
