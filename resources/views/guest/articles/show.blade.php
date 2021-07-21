@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Single view</h1>
    <div class="row">
      <div class="col-4">
        <img class="img-thumbnail" src="{{$article->image}}" alt="">
        <h3>{{$article->title}}</h3>
        <p>{{$article->body}}</p>
        <h5>{{$article->autor}}</h5>
      </div>
    </div>
</div>
    
@endsection