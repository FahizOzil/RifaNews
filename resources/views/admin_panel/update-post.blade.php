@extends('admin_panel.farshell-admin_panel.admin_panel_layout')


@section('admin_panel-content')
<h1 class="mx-3 my-2"> Modify Post </h1>
    <div class="col-md-12" style="display: flex; justify-content:center;">
        <form action="{{url('/')}}/update-post" method="post" enctype="multipart/form-data">
            @csrf
            @foreach ($update as $update )

           
            
            <input type="hidden" name="id" value="{{$update->id}}">
            <div class="col-mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control" name="title"  value="{{$update->post_title}}" required  style="width: 23rem">
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="desc"  value="{{$update->description}}"  style="width: 23rem">{{$update->description}}</textarea>
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Category</label>
                <select class="form-control" name="category" style="width: 23rem">
                    <option value="{{$update->category}}"selected>{{$update->name}}</option>
                    @foreach ($category as $cat)
                    @if ($cat->id == $update->category)
                        @continue
                    @endif
                    <option value="{{$cat->id}}"> {{$cat->name}} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Post Image</label>
                <input type="file" class="form-control" name="new-image" style="width: 23rem">
                <img  src="upload/{{$update->post_img}}" alt="old image"  width="250px" height="200px">
                <input type="hidden" name="old-image" value="{{$update->post_img}}"> 
            </div>
            @endforeach
            <button style="padding: 0px 50px" type="submit" class="btn btn-primary mx-5 my-1">Update</button>
        </form>
    </div>
@endsection
