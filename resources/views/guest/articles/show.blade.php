@extends('layouts.app')

@section('content')

    <div class="container pb-5">
        <h1>Single view</h1>
        <div class="row pb-3">
            <div class="col-4 pb-5">
                <img class="img-thumbnail" src="{{ asset('storage/' . $article->image) }}" alt="">
                <h3>{{ $article->title }}</h3>
                <h5>Category: {{ $article->category ? $article->category->name : 'Uncategory' }}</h5>
                <p>{{ $article->body }}</p>
                <h5>{{ $article->autor }}</h5>
            </div>
        </div>
    </div>

@endsection
