FROM php:8.0-alpine
COPY . /var/www/html/
RUN docker-php-ext-install mysqli && a2enmod rewrite
EXPOSE 80