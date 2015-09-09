FROM php:5.6-fpm
# Install modules
RUN apt-get update && apt-get install -y \
        curl \
        php5-cli \
        php5-mcrypt \
        php5-gd \
        php5-xdebug \
        php5-curl \
        php5-mysql \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd