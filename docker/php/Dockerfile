FROM php:7.4.16-cli

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN pecl install xdebug \
&& docker-php-ext-enable xdebug