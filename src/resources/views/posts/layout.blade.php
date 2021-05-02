<!DOCTYPE html>
<style>
    
    body {
        z-index: 1;
        position: relative;
        top:100px;
    }
    #navbar {
        margin: 0 auto;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: auto;
        background-color: #767676;
        padding: 0;
        z-index: 0;
    }
    #container {
        overflow: scroll;
    }
    #nav-item{ 
        font-weight: bold; 
        color: #000;
        font-size:30px;
    }
    #nav-item:hover{
        font-weight: bold;
        color: #33F;
        font-size:30px;
    }
    nav ul {
        margin: 0px;
        padding: 5px 0px 5px 30px;
    }
    nav li {
        display: inline;
        margin-right: 20px;
    }
    footer{
        position: fixed;
        bottom:0;
        left:0;
    }
</style>

<html>

<header>
    <div class="container">
        <nav id="navbar">
            <ul>
                <li><a href="/posts" id="nav-item">Home</a></li>
                <li><a href="/posts/create" id="nav-item">Criar</a></li>
            </ul>     
        </nav>
    </div>
</header>
    
<body>

<div class="container">
    @yield('content')
</div>

</body>


<footer>Laravel 8 CRUD Application - laravelcode.com
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</footer>

</html>