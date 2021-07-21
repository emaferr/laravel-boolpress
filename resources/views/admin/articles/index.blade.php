@extends('layouts.admin')

@section('content')

<div class="table-responsive container">
    <h1 class="pb-2">Articles</h1>
    <div class="text-right pb-3 px-3">
        <a href="{{route('admin.articles.create')}}"><i style="font-size: 2rem" class="fas fa-plus-circle"></i></a>
    </div>
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
            @foreach ($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td><a href="{{route('admin.articles.show',$article->id)}}"><img width="100" src="{{$article->image}}" alt="{{$article->title}}"></a></td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->body}}</td>
                    <td>{{$article->autor}}</td>
                    <td class="action d-flex">
                        <a class="px-2" href="">EDIT</a>
                        <form action="{{route('admin.articles.destroy',$article->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="trash" type="submit" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection