@extends('layouts.admin')

@section('content')

    <div class="container py-5">

        <h1>ARTICLE EDIT</h1>

        @include('layouts.parzials.error')

        <div class="d-flex flex-column">
            <h2>Edit a article</h2>
            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Image</label>
                        <img width="100" src="{{ asset('storage/' . $article->image) }}" alt="">
                        <input type="file" name="image" id="image">
                    </div>

                </div>

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Edit title..."
                        aria-describedby="helpId" value="{{ $article->title }}">
                    <small id="helpId" class="text-muted">Write the title of the article</small>
                </div>

                <div class="form-group">
                    <label for="">Body</label>
                    <textarea class="form-control" name="body" id="body" rows="3">{{ $article->body }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Autor</label>
                    <input type="text" class="form-control" name="autor" id="autor" aria-describedby="helpId"
                        placeholder="Edit Autor..." value="{{ $article->autor }}">
                    <small id="helpId" class="form-text text-muted">Write the authors of the article</small>
                </div>

                <div class="form-group">
                    <label for="category_id">Categories</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ $category->id == old('category->id',$article->category_id) ? 'selected' : '' }}> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
