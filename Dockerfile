FROM php:8.2-apache

# Install PHP extensions required for database & system operations
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    && docker-php-ext-install pdo_mysql mysqli mbstring exif pcntl bcmath gd zip opcache \
    && apt-get clean && rm -rf /var/www/html/* /var/lib/apt/lists/*

# Enable Apache mod_rewrite for Lavalust routes
RUN a2enmod rewrite

# Point Apache Document Root directly to project root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Apply production PHP configs
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html

# Copy repository contents into the container
COPY . /var/www/html/

# Set ownership permissions for Apache web server
RUN chown -R www-data:www-data /var/www/html

# Expose port and bind Apache dynamically to Render's $PORT at launch
EXPOSE 8080
CMD ["sh", "-c", "sed -i \"s/Listen 80/Listen ${PORT:-8080}/g\" /etc/apache2/ports.conf && sed -i \"s/<VirtualHost \\*:80>/<VirtualHost \\*:${PORT:-8080}>/g\" /etc/apache2/sites-available/000-default.conf && apache2-foreground"]