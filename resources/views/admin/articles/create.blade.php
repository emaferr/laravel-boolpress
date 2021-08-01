@extends('layouts.admin')

@section('content')
    <div class="container py-5">

        <h1>ARTICLE CREATE</h1>

        @include('layouts.parzials.error')

        <div class="d-flex flex-column">
            <h2>Add a Article</h2>
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
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

                <div class="form-group">
                    <label for="category_id">Categories</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option selected disabled>Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select multiple class="form-control" name="tags[]" id="tags">
                        <option>Select a Tag</option>
                        @if ($tags)
                            @foreach ($tags as $tag)

                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                            @endforeach
                        @endif
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </div>
@endsection
