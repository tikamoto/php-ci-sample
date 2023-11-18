FROM php:8.2-apache

RUN apt-get update \
    && docker-php-ext-install pdo_mysql \
    && apt-get install -y \
    git \
    curl \
    zip \
    unzip

ENV APACHE_DOCUMENT_ROOT='/var/www/app/web/'
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer