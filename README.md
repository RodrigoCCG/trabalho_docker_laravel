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