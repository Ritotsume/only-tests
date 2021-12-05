FROM php:apache
COPY ./ /var/www/html
RUN pecl install xdebug && docker-php-ext-enable xdebug
