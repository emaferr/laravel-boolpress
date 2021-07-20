@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      @foreach ($articles as $article)
      <div class="col-4">
        <img class="img-thumbnail" src="{{$article->image}}" alt="">
        <h3>{{$article->title}}</h3>
        <p>{{$article->body}}</p>
        <h5>{{$article->autor}}</h5>
      </div>
      @endforeach
    </div>
</div>

@endsection