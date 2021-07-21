@extends('layouts.admin')

@section('content')

<div class="table-responsive container">
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
                <td><img width="100" src="{{$article->image}}" alt="{{$article->title}}"></td>
                <td>{{$article->title}}</td>
                <td>{{$article->body}}</td>
                <td>{{$article->autor}}</td>
                <td>View EDIT | DELETE</td>
            </tr>
        </tbody>
    </table>
</div>
    
@endsection