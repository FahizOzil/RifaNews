@extends('admin_panel.farshell-admin_panel.admin_panel_layout');



@section('admin_panel-content')
<h1 class="mx-3 my-4" > Modify User </h1>
<div class="col-md-12 my-5" style="display: flex; justify-content:center;">
   

   
<form action="{{url('/')}}/update" method="post">
    @csrf
    @foreach ($value as $val )
        
    
    <div class="col-mb-3">
        <input type="hidden" name="id" value="{{$val->id}}">
        <label  class="form-label">First Name</label>
        <input  class="form-control" type="text" name="fname" value="{{$val->first_name}}" style="width:18rem;">
    </div>
    <div class="col-mb-3">
        <label  class="form-label">Last Name</label>
        <input class="form-control" type="text" name="lname" value="{{$val->last_name}}" style="width:18rem;">
    </div>
    <div class="col-mb-3">
        <label  class="form-label">username</label>
        <input class="form-control" type="text" name="username" value="{{$val->username}}" style="width:18rem;">
    </div>
    <div class="col-mb-3">
        <label  class="form-label">Role</label>
        <select class="form-control" name="role" style="width:18rem;">
            <option disabled>@if ($val->role == 1)
                {{ 'Admin' }}
            @else
                {{'Normal user'}}
            @endif</option>
            <option value="1">admin</option>
            <option value="2">Normal</option>
        </select>
    </div>

    <button type="submit" class="btn btn-info mx-5 my-2"> Update </button>
</form>
</div>
@endforeach
@endsection