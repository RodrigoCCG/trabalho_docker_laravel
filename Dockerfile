FROM php:7.4-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql
COPY ./src var/www/html/src
ADD ./nginx/default.config ./nginx
ADD ./src ./src
ADD ./mysql ./mysql
ADD Dockerfile .
ADD docker-compose.yml .
