FROM php:8.3-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git \
    zip \
    libpq-dev \
    && docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql

RUN curl -sL https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN pecl install xdebug && docker-php-ext-enable xdebug

CMD ["php-fpm"]
