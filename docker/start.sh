#!/usr/bin/env bash
set -e

# ensure storage and cache directories exist
mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# If APP_KEY is missing, optionally generate one (but prefer to set APP_KEY via ENV)
if [ -z "$APP_KEY" ]; then
  php artisan key:generate --force
fi

# Run migrations (optional). Be careful: ensure DB env variables are present.
if [ "$RUN_MIGRATIONS" = "true" ]; then
  echo "Running migrations..."
  php artisan migrate --force || echo "Migrations failed (will continue)."
fi

# Clear and cache config/routes/views for production performance
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Start php-fpm in background
# If the php-fpm socket path differs, change accordingly
php-fpm -D

# Start nginx in foreground
nginx -g "daemon off;"
