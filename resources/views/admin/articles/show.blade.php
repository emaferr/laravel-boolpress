@extends('layouts.admin')

@section('content')

<div class="table-responsive container">
    <h1>ARTICLE</h1>
    <h4>{{$article->title}}</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Body</th>
                <th>Autor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$article->id}}</td>
                <td><img width="100" src="{{asset('storage/' . $article->image)}}" alt="{{$article->title}}"></td>
                <td>{{$article->title}}</td>
                <td>{{$article->body}}</td>
                <td>{{$article->autor}}</td>
                <td class="action d-flex">
                    <a class="px-2" href="{{route('admin.articles.edit',$article->id)}}">EDIT</a>
                    <form action="{{route('admin.articles.destroy',$article->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button id="trash" type="submit" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    
@endsection