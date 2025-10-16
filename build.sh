#!/usr/bin/env bash
# exit on error
set -o errexit

composer install --no-dev --prefer-dist --optimize-autoloader

php artisan key:generate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache