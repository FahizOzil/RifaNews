@extends('admin_panel.farshell-admin_panel.admin_panel_layout')

@section('admin_panel-content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">


            
<h1 style="float: left;"> All Posts </h1>
<button style="float: right;"  class="btn btn-dark" type="button"><a class="text-white" href="{{route("add-post")}}">Add Posts</a></button>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Post Title</th>
            <th>Descrition</th>
            <th>Category</th>
            <th>Author</th>
            <th>Publish Date</th>
            <th>Post Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($post as $post )
            
       
        <tr>
            <td>{{ $post->post_title }}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->category}}</td>
            <td>{{$post->author}}</td>
            <td> {{$post->updated_at}} </td>
            <td>{{$post->post_img}}</td>

            <td><a href="{{route('update-post')}}?id={{$post->id}}"><i class="bi bi-pencil-fill"></i></a></td>
            <td><a href="{{route('delete-post')}}?id={{$post->id}}"><i class="bi bi-trash"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>


</div>
</div>
</div>
@endsection

