@extends('posts.layout')
  
@section('content')
    <div class="row" style="padding: 10px;">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
    </div>
   
    <div class="row">
        <div class="container">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>
    </div>
@endsection