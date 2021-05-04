FROM php:7.4-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql
COPY ./src ./src/*
COPY ./mysql ./mysql/*
COPY ./nginx ./nginx/*
COPY Dockerfile Dockerfile
COPY docker-compose.yml docker-compose.yml