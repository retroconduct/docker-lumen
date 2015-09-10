FROM php:5.6-fpm
# Install modules
RUN apt-get update && apt-get install -y \
        curl \
        php5-cli \
        php5-mcrypt \
        php5-gd \
        php5-xdebug \
        php5-curl \
        php5-mysql
    # && docker-php-ext-install pdo \
    # && docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php 
RUN mv composer.phar /usr/local/bin/composer