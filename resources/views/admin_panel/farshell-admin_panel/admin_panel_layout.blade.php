<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rifa Admin_panel</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        #menu-head {
            display: flex;
            justify-content: center;
            background: #203339;
        }

        #menu li a {
            color: white;

        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row" style="background-color: black;">
            <div class="col-md-8">
                <div class="logo" >
                    <img src="images/logo2.jpg" alt="admin_panel logo" height="150px" width="180px">
                </div>
            </div>
            <div class="col-md-4 my-5">
                <div class="user-login my-3 mx-3">
                <ul class="nav justify-content-end  ">
                    <li class="nav-item">
                        <a style="border-bottom: 1px solid #e1e1e1; color:gray;" class="nav-link active" href="#" aria-current="page"> <i class="fas fa-user"></i> {{ $_SESSION['username'] }}</a>
                    </li>
    
                    <li class="nav-item">
                        <a style=" color:gray;" class="nav-link" href="{{route('logout')}}"><i class="fas fa-hand-point-left"></i> Log Out</a>
                    </li>
                </ul>
                </div>
            </div>
           
        </div>

        <div class="row">
            <div class="menubar" id="menu-head">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav" id="menu">
                        <li class="nav-item"><a href="{{ route('users') }}"
                                class="nav-link {{ $_SERVER['REQUEST_URI'] == '/user' ? 'active' : '' }}">Users</a></li>
                        <li class="nav-item"><a href="{{ route('post') }}" class="nav-link">Posts</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Category</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    @yield('admin_panel-content')

</body>

</html>
