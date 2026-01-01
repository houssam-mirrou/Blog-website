FROM php:8.2-apache

RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql

COPY apache.conf /etc/apache2/conf-enabled/apache.conf