FROM php:7.3-fpm

COPY php.ini /usr/local/etc/php/

# install extensions
RUN docker-php-ext-install mysqli

# prepare mysql socket
RUN apt-get update
RUN apt-get -y install default-mysql-client
