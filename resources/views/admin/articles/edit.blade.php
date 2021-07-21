@extends('layouts.admin')

@section('content')
<h1>COMICS EDIT</h1>
<div class="container-xl pt-3">

    @include('layouts.parzials.error')
    
    <div class="d-flex flex-column">
        <h2>Edit a article</h2>
    <form action="{{route('admin.articles.update',$article->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Image</label>
            <img width="100" src="{{$article->image}}" alt="" class="d-block pb-3">
            <input type="text" name="image" id="image" class="form-control" placeholder="Edit URL..."
                aria-describedby="helpId" value="{{$article->image}}">
            <small id="helpId" class="text-muted">Write the URL image of the article</small>
        </div>
    
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Edit title..."
                aria-describedby="helpId" value="{{$article->title}}">
            <small id="helpId" class="text-muted">Write the title of the article</small>
        </div>

        <div class="form-group">
            <label for="">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" aria-describedby="helpId"
                placeholder="Edit Autor..." value="{{$article->autor}}">
            <small id="helpId" class="form-text text-muted">Write the authors of the article</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
    
</div>
@endsection