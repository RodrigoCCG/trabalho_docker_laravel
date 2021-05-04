# Trabalho de TAdC (Docker)
<p>Este projeto se refere ao trabalho de topicos avancados de computacao de 2021.</p>
<p>O aplicativo deste Docker cria uma pagina de blog utilizando o Framework Laravel 8.4, utilizando 
nginx (stable-alpine) para backend e PHP (7.4-fpm-alpine) para programacao. Utiliza-se o banco de dados mysql (latest) para armazenamentodas postagens.</p>
<p>Para utilizacao deste programa, utilize os seguintes commandos no terminal a partir do diretorio de instalacao:</p>
<code>docker-compose build</code>
<p>Em seguida, realize deploy do Container:</p>
<code>docker-compose up -d</code>
<p>Finalmente, realize as migracoes necessarias para o banco de dados:</p>
<code>docker-compose exec php php /var/www/html/artisan migrate</code>
<p>Este programa foi desenvolvido a partir dos tutoriais:</p>
<ul>
    <li>
        <a href="https://www.freecodecamp.org/learn/responsive-web-design/responsive-web-design-projects/" target="_blank">Free code Camp: Responsive Web Design</a>
    </li>
    <li>
        <a href="https://youtu.be/5N6gTVCG_rw" target="_blank">Create a local Laravel dev environment with Docker</a>
    </li>
    <li>
        <a href="https://www.laravelcode.com/post/laravel-8-crud-application-tutorial-with-example" target="_blank">Laravel CRUD application tutorial with Example.</a>
    </li>
</ul>

<p>Acessivel pela porta <a href="http://localhost:8088/" target="_blank" >http://localhost:8088/</a></p>
<h3>Dockerfile</h3>
<code>
FROM php:7.4-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql
COPY ./src ./src
COPY ./mysql ./mysql
COPY ./nginx ./nginx
</code>
<h3>docker-compose.yml</h3>
<code>version: '3'
networks:
    laravel:

services:
    nginx:
        image: nginx:stable-alpine
        container_name: nginx
        ports: 
            - "8088:80"
        volumes: 
            - ./src:/var/www/html 
            - ./nginx/default.conf:/etc/nginx/conf.d/default.conf
        depends_on: 
            - mysql
            - php
        networks: 
            - laravel

    mysql:
        image: mysql:latest
        container_name: mysql
        restart: unless-stopped
        tty: true
        ports: 
            - "3306:3306"
        volumes: 
            - ./mysql:/var/lib/mysql
        environment: 
            MYSQL_DATABASE: homestead
            MYSQL_USER: homestead
            MYSQL_PASSWORD: secret
            MYSQL_ROOT_PASSWORD: secret
            SERVICE_TAGS: dev
            SERVICE_NAME: mysql
        networks: 
            - laravel

    php:
        build:
            context: .
            dockerfile: Dockerfile
        container_name: php
        volumes: 
            - ./src:/var/www/html
        ports: 
            - "9000:9000"
        networks: 
            - laravel</code>