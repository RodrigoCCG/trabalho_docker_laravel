@extends('layout')
<style>
    .login{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 10px;
        font-size: 16px;
    }
    .login:hover{
        background-color: #5DBF61; /* Green */
        border: none;
        color: white;
        padding: 15px 32px 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 10px;
        font-size: 16px;
    }
    .navegar{
        background-color: #008CBA; /* Green */
        border: none;
        color: white;
        padding: 15px 32px 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 10px;
        font-size: 16px;
    }
    .navegar:hover{
        background-color: #119DCB; /* Green */
        border: none;
        color: white;
        padding: 15px 32px 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 10px;
        font-size: 16px;
    }
    .center{
        text-align: center;
        margin: auto;
        width: 50%;
        padding: 10px;
    }
</style> 
@section('content')
    <h1 class="center" style="border: 5px solid #5A5; border-radius: 10px; padding:20px;">Bem vindo ao Blog!</h1>
    <div class="center">
        <a href="/posts" class="navegar">Navegar</a>
        <a href="/login" class="login">Login</a>
    </div>
@endsection