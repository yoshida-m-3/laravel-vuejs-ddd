FROM php:8.1.0-fpm
COPY php.ini /usr/local/etc/php/

WORKDIR /var/www/laravel

# install app
RUN apt update \
    && apt install -y p7zip-full

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
