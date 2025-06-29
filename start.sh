#!/bin/sh

# Hardcoded fallback for Railway deployment
echo "Starting Laravel on port 8000"
php artisan serve --host=0.0.0.0 --port=8000
