@extends('layout')
  
@section('content')
    <div class="row" style="padding: 10px;">
            <div class="pull-left">
                <h2>Mostrar Postagem</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
    </div>
   
    <div class="row">
        <div class="container">
            <div class="form-group">
                <h4>
                    <strong>Titulo:</strong>
                    {{ $post->title }}
                </h4>
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>Texto:</strong>
                <p>{{ $post->description }}</p>
            </div>
        </div>
    </div>
@endsection