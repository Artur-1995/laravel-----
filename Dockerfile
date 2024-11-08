FROM php:7.4-fpm AS base

RUN apt-get -y update && apt-get upgrade -y
RUN apt-get install -y curl git zip nano
# RUN apt-get install -y php-mysql
# git zip pdo_mysql php7.4-xml
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY --chmod=777 ./www /var/www/public_html

WORKDIR /var/www/public_html

# FROM base

# COPY --chmod=777 ./www /var/www/public_html

# EXPOSE 9000
CMD [ "php-fpm" ]