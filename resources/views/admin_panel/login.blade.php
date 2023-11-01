   <link rel="stylesheet" href="css/layout.css">




<div class="col-md-12 my-5" style="justify-content: center; display:flex;">
<form action="{{url('/')}}/login" method="post" style="box-shadow: 5px 5px 20px;padding:20px;">
@csrf
    <h2 class="text-center"> Login  </h2>
    
    <div class="col-mb-3">
        <label  class="form-label">Email</label>
        <input type="Email" class="form-control" name="email" style="width:19rem;">
      </div>
    
      <div class="col-mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" style="width:19rem;">
      </div>
     <button style="padding: 4px 50px;margin-left:70px;"  type="submit" class="btn btn-primary  my-2">Login</button>
     <p class="my-3" style="border-bottom: 2px solid #e1e1e1">Dont Have an Account?<a href="{{route('add-user')}}">Sign UP</a> </p>

     <!-- Horizontal under breakpoint -->
     <ul class="list-group list-group-md">
        <li class="list-group-item my-1"><a href="">Login with Google</a></li>
        <li class="list-group-item my-1"><a href="">Login with Facebook</a></li>
        <li class="list-group-item my-1"><a href="">Login with Twitter</a></li>
       </ul>
    </form>
</div>
