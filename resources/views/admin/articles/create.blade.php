@extends('layouts.admin')

@section('content')
    <div class="container py-5">

        <h1>ARTICLE CREATE</h1>

        @include('layouts.parzials.error')

        <div class="d-flex flex-column">
            <h2>Add a Article</h2>
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="form-group">
            <label for="">Image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="Add URL..."
                aria-describedby="helpId" value="{{old('image')}}">
            <small id="helpId" class="text-muted">Write the URL image of the article</small>
        </div> --}}
        @error('image')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" id="image">
                </div>
               
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Add title..."
                        aria-describedby="helpId" value="{{ old('title') }}" required>
                    <small id="helpId" class="text-muted">Write the title of the article</small>
                </div>

                <div class="form-group">
                    <label for="">Descrption</label>
                    <textarea class="form-control" name="body" id="body" rows="3" value="{{ old('body') }}"
                        required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Autor</label>
                    <input type="text" class="form-control" name="autor" id="autor" aria-describedby="helpId"
                        placeholder="Add Autor..." value="{{ old('autor') }}" required>
                    <small id="helpId" class="form-text text-muted">Write the authors of the article</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
