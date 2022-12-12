FROM php:8.1-fpm

RUN apt update

RUN apt install -y \
      zlib1g-dev \
      g++ \
      git \
      zip \
      libzip-dev \
      libz-dev

RUN apt install -y \
      libicu-dev \
      libjpeg-dev \
      libfreetype6-dev \
      libpng-dev \
      libwebp-dev

RUN docker-php-ext-install intl opcache pdo pdo_mysql
RUN pecl install apcu
RUN docker-php-ext-enable apcu
RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip

RUN apt install -y \
    libxpm-dev

RUN docker-php-ext-configure gd \
        --prefix=/usr \
        --with-jpeg \
        --with-webp \
        --with-xpm \
        --with-freetype

RUN docker-php-ext-install gd

WORKDIR /var/www/app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
#RUN chmod a+x /usr/local/bin/symfony

RUN groupadd -o -g 1000 app \
    && useradd -o -u 1000 -g app -G root -d /var/www/app app

COPY ./docker/php-fpm/custom.ini /usr/local/etc/php/conf.d/custom.ini

USER 1000:1000
