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
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror ">
                    </div>

                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Edit title..."
                        aria-describedby="helpId" value="{{ $article->title }}">
                    <small id="helpId" class="text-muted">Write the title of the article</small>
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3">{{ $article->body }}</textarea>
                </div>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                

                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control @error('autor') is-invalid @enderror" name="autor" id="autor" aria-describedby="helpId"
                        placeholder="Edit Autor..." value="{{ $article->autor }}">
                    <small id="helpId" class="form-text text-muted">Write the authors of the article</small>
                </div>
                @error('autor')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="category_id">Categories</label>
                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category->id', $article->category_id) ? 'selected' : '' }}>
                                {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>

                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select multiple class="form-control @error('tags') is-invalid @enderror" name="tags[]" id="tags">
                        <option disabled>Select a Tag</option>
                        @if ($tags)
                            @foreach ($tags as $tag)

                                <option value="{{ $tag->id }}"
                                    {{ $article->tags->contains($tag) ? 'selected' : '' }}>{{ $tag->name }}</option>

                            @endforeach
                        @endif
                    </select>
                </div>

                @error('tags')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
