# Use the official PHP image with Apache
FROM php:7.4-apache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy your application files into the container
COPY . /var/www/html/

RUN chmod -R 777 /var/www/html/

# Expose the port for web access
EXPOSE 80

# Command to run Apache and PHP
CMD ["apache2-foreground"]