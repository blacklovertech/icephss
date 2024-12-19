# Use the Railway Nixpacks Ubuntu base image
FROM ghcr.io/railwayapp/nixpacks:ubuntu-1731369831

# Set the working directory
WORKDIR /app/

# Copy Nixpacks configurations (if applicable, from your project)
COPY .nixpacks/nixpkgs-dbc4f15b899ac77a8d408d8e0f89fa9c0c5f2b78.nix .nixpacks/nixpkgs-dbc4f15b899ac77a8d408d8e0f89fa9c0c5f2b78.nix

# Install dependencies using nixpkgs
RUN nix-env -if .nixpacks/nixpkgs-dbc4f15b899ac77a8d408d8e0f89fa9c0c5f2b78.nix && nix-collect-garbage -d

# Copy the application code to the working directory
COPY . /app/.

# Change permissions for all files and folders in the app directory
RUN chmod -R 777 /app/

# Create necessary directories for logs and cache (for nginx)
RUN mkdir -p /var/log/nginx && mkdir -p /var/cache/nginx

# If you are running a web service with Nginx, you'll need an nginx.conf file
# Make sure you add your Nginx configuration, for example:
# COPY nginx.conf /etc/nginx/nginx.conf

# Install necessary PHP dependencies
# If you need PHP and Composer setup, you can add the following lines
RUN apt-get update && apt-get install -y php php-cli php-fpm php-mbstring php-xml php-json && \
    curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Install PHP dependencies (if using Composer)
RUN composer install

# Set up a PHP server with Nginx or PHP built-in server
# If using the PHP built-in server:
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public_html"]

# Expose the port
EXPOSE 8080
