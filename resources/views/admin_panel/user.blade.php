@extends('admin_panel.farshell-admin_panel.admin_panel_layout')

@section('admin_panel-content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">


            
<h1 style="float: left;"> All Users </h1>
<button style="float: right;"  class="btn btn-dark" type="button"><a class="text-white" href="/add">Add User</a></button>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user )
            
       
        <tr>
            <td>{{ $user->first_name }}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->first_name}}  {{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>  @if ($user->role == 1)
                {{ 'Admin' }}        
          @else
                {{'Normal User'}}
            @endif </td>

            <td><a href="{{route('update-user')}}?id={{$user->id}}"><i class="bi bi-pencil-fill"></i></a></td>
            <td><a href="{{route('delete-user')}}?id={{$user->id}}"><i class="bi bi-trash"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>


</div>
</div>
</div>
@endsection

