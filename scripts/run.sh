#!/bin/sh

# Cache configuration, routes, and views for optimal performance
echo "Caching Laravel configuration, routes, and views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link if not already exists
echo "Linking storage folder..."
php artisan storage:link --force

# Run database migrations automatically in production
echo "Running database migrations..."
php artisan migrate --force

# Seed the database only if the users table is empty
echo "Checking if database needs seeding..."
php scripts/seed-if-empty.php
