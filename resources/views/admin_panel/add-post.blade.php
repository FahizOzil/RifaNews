@extends('admin_panel.farshell-admin_panel.admin_panel_layout')

@section('admin_panel-content')

<div class="col-md-12 my-5" style="display: flex; justify-content:center;">
    <form action="{{url('/')}}/addpost" method="post" enctype="multipart/form-data">
        @csrf
        <h3 class="text-center"> Add New Post </h3>
        <div class="col-mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" name="title"  style="width: 19rem">
            <span class="text-danger"> @error('title') {{$message}}  @enderror </span>
          </div>
          <div class="col-mb-3">
            <label for="" class="form-label">Description</label>
            <textarea type="text" class="form-control" name="desc"  style="width: 19rem"></textarea>
            <span class="text-danger">@error('desc') {{$message}} @enderror</span>
          </div>

          <div class="col-mb-3">
            <label for="" class="form-label">Category</label>
            <select class="form-control" name="category"  style="width: 19rem">
            <option disabled selected>Select Category</option>
            @foreach ($category as $cat )
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            <span class="text-danger">@error('category') {{$message}}  @enderror</span>
            @endforeach
            </select>
          </div>
       
          
          <div class="col-mb-3">
            <label for="" class="form-label">Post Image </label>
            <input type="file" class="form-control" name="upload-img"  style="width: 19rem">
          </div>
          <button style="padding:2px 45px;" type="submit" class="btn btn-primary mx-5 my-3">Add Post</button>
    </form>
</div>
@endsection