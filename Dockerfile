FROM php:8.2-apache

ENV CI_PROVIDER=Local

COPY index.php /var/www/html/
