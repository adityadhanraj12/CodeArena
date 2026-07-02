FROM richarvey/nginx-php-fpm:3.1.6

# Install Node.js, NPM, Chromium, and required Alpine dependencies for Puppeteer
RUN apk add --no-cache \
    nodejs \
    npm \
    chromium \
    nss \
    freetype \
    harfbuzz \
    ca-certificates \
    ttf-freefont \
    gcompat

# Set Puppeteer environment variables
ENV PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true
ENV PUPPETEER_EXECUTABLE_PATH=/usr/bin/chromium-browser

WORKDIR /var/www/html

# Copy dependency files first for optimal Docker layer caching
COPY composer.json composer.lock package.json package-lock.json ./

# Install Composer and NPM packages
RUN composer install --no-dev --no-scripts --no-autoloader --ansi && \
    npm ci --ansi

# Copy the rest of the application codebase
COPY . .

# Complete Composer autoloader optimization, compile frontend assets with Vite, and prune devDependencies
RUN composer dump-autoload --no-dev --optimize --classmap-authoritative && \
    npm run build && \
    npm prune --production

# Adjust storage and cache permissions for PHP-FPM / Nginx
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Web server container configuration
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel production settings
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

EXPOSE 80
