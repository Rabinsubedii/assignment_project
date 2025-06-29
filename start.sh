#!/bin/sh

# Fallback to port 8000 if $PORT is not set or not a number
PORT_NUMBER=${PORT:-8000}

echo "Starting Laravel on port $PORT_NUMBER"

php artisan serve --host=0.0.0.0 --port=$PORT_NUMBER
