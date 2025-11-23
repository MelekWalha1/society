# ---------- build stage ----------
FROM php:8.1-fpm-bullseye AS build

# set working dir
WORKDIR /var/www/html

# install system deps
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libwebp-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    nginx \
    ca-certificates \
    gnupg2 \
    build-essential \
    --no-install-recommends

# Install Node.js 18 (for building assets)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
 && apt-get install -y nodejs

# Install PHP extensions needed for Laravel
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy package/composer files first (better cache)
COPY composer.json composer.lock /var/www/html/
COPY package.json package-lock.json /var/www/html/

# Install PHP deps (without dev packages)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Install node deps & build assets
RUN npm install
# copy the rest of the app so build can pick up any imports
COPY . /var/www/html
RUN npm run build

# clear caches (optional)
RUN php artisan config:clear || true
RUN php artisan route:clear || true
RUN php artisan view:clear || true

# ---------- final runtime stage ----------
FROM php:8.1-fpm-bullseye AS runtime

WORKDIR /var/www/html

# install system deps required at runtime
RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev libjpeg-dev libwebp-dev \
    libpq-dev \
    --no-install-recommends \
 && rm -rf /var/lib/apt/lists/*

# Install PHP extensions again for runtime
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd zip

# copy composer from build stage (already installed vendor)
COPY --from=build /var/www/html /var/www/html

# copy nginx config
COPY ./docker/nginx.conf /etc/nginx/sites-available/default

# add start script
COPY ./docker/start.sh /start.sh
RUN chmod +x /start.sh

# set correct permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# expose http port
EXPOSE 80

# use start script
CMD ["/start.sh"]
