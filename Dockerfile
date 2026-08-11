# ----------------------------------------------------
# Stage 1: Build & Composer Dependencies
# ----------------------------------------------------
FROM composer:2.6 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./

# Install dependencies without dev-packages or running scripts yet
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-autoloader \
    --no-scripts

COPY . .

RUN composer dump-autoload --optimize

# ----------------------------------------------------
# Stage 2: Production Apache/PHP Image
# ----------------------------------------------------
FROM php:8.2-apache

# Install required system packages & PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip opcache \
    && apt-get clean && rm -rf /var/www/html/* /var/lib/apt/lists/*

# Enable Apache mod_rewrite for clean Laravel/Lavalust URLs
RUN a2enmod rewrite

# Change Apache Document Root to /public (for Laravel / Lavalust public folder)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Configure PHP production defaults
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy application files and vendor directory from build stage
WORKDIR /var/www/html
COPY --from=vendor /app /var/www/html

# Copy entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set correct permissions for Laravel runtime folders
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache 2>/dev/null || true

# Render assigns a dynamic PORT at runtime (defaults to 8080 if not set)
EXPOSE 8080

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["apache2-foreground"]