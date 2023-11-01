@extends('admin_panel.farshell-admin_panel.admin_panel_layout');



@section('admin_panel-content')
<div class="col-md-12 my-5" style="display: flex; justify-content:center;">
        
<form action="{{url('/')}}/add" method="post">
    @csrf
    <h4 class="mx-5"> Add New User</h4>
    <div class="col-mb-3">
        <label  class="form-label">First Name</label>
        <input  class="form-control" type="text" name="fname" style="width:18rem;" value="{{old('fname')}}">
        <span class="text-danger"> @error('fname') {{$message}}  @enderror </span>
    </div>
    <div class="col-mb-3">
        <label  class="form-label">Last Name</label>
        <input class="form-control" type="text" name="lname" style="width:18rem;" value="{{old('lname')}}">
    </div>
    <div class="col-mb-3">
        <label  class="form-label">username</label>
        <input class="form-control" type="text" name="username" style="width:18rem;" value="{{old('username')}}">
        <span class="text-danger"> @error('username'){{$message }} @enderror </span>
    </div>
    <div class="col-mb-3">
        <label  class="form-label">Email</label>
        <input class="form-control" type="email" name="email" placeholder="@gmail.com" style="width:18rem;" value="{{old('email')}}">
        <span class="text-danger"> @error('email') {{$message}} @enderror </span>
    </div>
    <div class="col-mb-3">
        <label  class="form-label">Password</label>
        <input class="form-control" type="password" name="pass" style="width:18rem;">
        <span class="text-danger"> @error('pass') {{$message}} @enderror </span>
    </div>
    <div class="col-mb-3">
        <label  class="form-label">Role</label>
        <select class="form-control" name="role" style="width:18rem;">
            <option value="1">admin</option>
            <option value="2">Normal</option>
        </select>
    </div>

    <button type="submit" class="btn btn-info mx-5 my-2"> Add User</button>
</form>
</div>
@endsection