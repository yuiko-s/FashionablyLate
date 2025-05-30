FROM php:7.4.9-fpm


COPY php.ini /usr/local/etc/php/

RUN apt update \
    && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip \
    && docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer self-update

WORKDIR /var/www

FROM ubuntu:latest
RUN apt-get update && apt-get install -y \
    sudo \
    && rm -rf /var/lib/apt/lists/*
RUN useradd -m -s /bin/bash yuikos
RUN echo "yuikos ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers

WORKDIR /home/yuikos

USER yuikos
