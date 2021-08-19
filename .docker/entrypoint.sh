#!/bin/bash

composer require predis/predis

composer install

php artisan key:generate

php artisan config:cache

php artisan migrate

php-fpm