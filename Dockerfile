FROM php:7.4-fpm AS base

RUN apt-get -y update && apt-get upgrade -y
RUN apt-get install -y curl git zip nano

RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY ./ /var/www/html
COPY --chown=./:html ./ /var/www/html

WORKDIR /var/www/html

CMD [ "php-fpm" ]