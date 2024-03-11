FROM composer:2.6 as composer
FROM php:8.3-fpm-alpine

RUN apk add icu-dev rabbitmq-c-dev build-base autoconf libxslt-dev
RUN pecl install amqp
RUN docker-php-ext-enable amqp
RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo_mysql intl xsl

ADD php.ini /usr/local/etc/php/conf.d/php.ini

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

CMD ["php-fpm"]
