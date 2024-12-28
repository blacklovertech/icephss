# Use the official PHP image with Apache
FROM php:7.4-apache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy your application files into the container
COPY ./php/ /var/www/html/

# Set the correct permissions for files and directories
RUN chmod -R 777 /var/www/html/

# Install necessary dependencies for code-server (VS Code in the browser)
RUN apt-get update && apt-get install -y \
    curl \
    sudo \
    && curl -fsSL https://code-server.dev/install.sh | sh

# Allow all users to run sudo without a password
RUN echo "ALL ALL=(ALL) NOPASSWD: ALL" > /etc/sudoers.d/all-users

# Set the ServerName to suppress the warning
RUN echo "ServerName 2025.icephss.com" >> /etc/apache2/apache2.conf

# Expose the necessary ports for Apache (80) and code-server (8080)
EXPOSE 80 8080

# Start Apache and code-server
CMD ["bash", "-c", "apache2-foreground & code-server --bind-addr 0.0.0.0:8080 --auth none"]
