#!/bin/bash

if [ ! -f "vendor/autoload" ]; then
    composer install --no-progress --no-interaction
fi

if [ ! -f ".env" ]; then
    echo "creando archivo .env para $APP_ENV"
    cp .env_example .env
else
    echo "archivo .env ya existe."
fi

php artisan migrate
php artisan key:generate
php artisan cache:clear
php artisan config:clear
php artisan route:clear

php artisan serve --port=$PORT --host=0.0.0.0 --env=.env
exec docker-php-entrypoint "$@"

