<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RifaNews @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/images/logo2.jpg">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    {{-- haeder  --}}
    <nav class="navbar navbar-expand-lg " style="border-bottom: 5px solid black;">
        <div class="container">
            <ul class="navbar-nav" id="socail-head">
                <li class="nav-item"><a class="nav-link" href="www.facebook.com"><i class="bi bi-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="whatsApp"><i class="bi bi-whatsapp"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="www.instagram.com"><i class="bi bi-instagram"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="www.twitter.com"><i class="bi bi-twitter"></i></a></li>
            </ul>

            {{-- header logo  --}}
            <div class="logo" id="head-logo">
                <img src="images/rifa-w.jpg" alt="logo" height="80px" width="120px">
            </div>

            {{-- .search term  --}}
            <div class="search" id="search-term">
                <form action="search" method="get">
                    <div class="d-flex">
                        <input class="form-control" type="search" name="search" value="{{ $_GET['search'] ?? ''}}" placeholder="search...">
                        <button id="search-btn">  Search </a></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>


{{-- start menu and offcanvas section  --}}
<div class="container-fluid" style=" border-bottom:1px solid#e1e1e1 !important;">
    <div class="row">
        <div class="col">
             {{-- offcanvas  --}}
    <button style="float: left;background:white;font-size:37px;border:none;" class="mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-list"></i></button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header" style="border-bottom:1px solid #e1e1e1">
     <img class="mx-5" src="images/1.jpg" alt="menu-logo" height="220px" width="250px">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="nav flex-column nav-pills">
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link text-dark">Home</a></li>
            <li class="nav-item"><a href="{{route('sport')}}" class="nav-link text-dark">Sport</a></li>
            <li class="nav-item"><a href="{{route('war')}}" class="nav-link text-dark">War</a></li>
            <li class="nav-item"><a href="{{route('politics')}}" class="nav-link text-dark">Politics</a></li>
            <li class="nav-item"><a href="{{route('entertain')}}" class="nav-link text-dark">Entertainment</a></li>
            <li class="nav-item"><a href="{{route('business')}}" class="nav-link text-dark">Business</a></li>
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link text-dark">Latest News</a></li>
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link text-dark">Recent News</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link text-dark">About Us</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-dark">Contact</a></li>
        </ul>
      </div>
    </div>
    
    
    
        {{-- menubar  --}}
        <nav class="navbar navbar-expand-lg justify-content-center" id="menu-nav">
            <ul class="navbar-nav" id="menu-bar">
                <li class="nav-item"><a class="nav-link {{ $_SERVER['REQUEST_URI'] == '/' ?'active':'' }}" href="/">Home</a></li>
                <li class="nav-item "> <a class="nav-link {{ $_SERVER['REQUEST_URI'] == '/sport' ?'active' : ''}}" href="{{route('sport')}}">Sports </a> </li>
                <li class="nav-item"><a class="nav-link {{$_SERVER['REQUEST_URI'] == '/politics' ?'active':''}}" href="{{route('politics')}}">Politics</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('war')}}">War</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('entertain')}}">Entertainment</a></li>
                <li class="nav-item"><a  class="nav-link" href="{{route('tech')}}">Tech</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('business')}}">Bussines</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
            </ul>
        </nav>
    
        </div>
    </div>
</div>
   

    {{-- start content  --}}

    <div class="container-fluid my-5" >
        <div class="row" >
            <div class="col-md-2" id="left-sidebar"> {{-- 1st col-md-2 --}}
                {{-- left sidebar-content  --}}
                @yield('left-sidebar-content')
            </div>



            <div class="col-md-7"> {{-- 2st col-md-7 --}}
                {{-- mean news means headline  --}}
                @yield('headline-content')
                {{-- latest news  --}}
                @yield('latest-news')

                <div class="pagination my-3" style="clear: both;justify-content:center;padding-top: 41px;">
                   @yield('paginate')
                </div>
            </div>

            {{-- 3st col-md-3 --}}
            <div class="col-md-3"  id="left-sidebar" style=" height:100%;">
                @yield('right-sidebar-content')
            </div>


        </div>
    </div>
    {{-- end first section  --}}


    {{-- second container start here  --}}
    <div class="container">
        <div class="row">
            <div class="col">
                @yield('sport')
            </div>
        </div>

        <div class="row">
            <div class="col my-5">
                @yield('Politics')
            </div>
        </div>

        <div class="row">
            <div class="col my-4">
                @yield('War')
            </div>
        </div>

        <div class="row">
            <div class="col my-4">
                @yield('Entertain')
            </div>
        </div>


    </div>





    {{-- footer section  --}}
    <div class="container-fluid" style="background: black">
        <div class="row">
            <div class="col-md-12">
                <div class="footer" style="display: flex;justify-content:center;">
                    <div class="footer-logo">
                        <img src="images/2.jpg" alt="footer logo" height="200px" width="200px">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
              <ul class="nav justify-content-center" style="border-top:1px solid #e1e1e1">
                <li class="nav-item"><a class="nav-link" href=""><i class="bi bi-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href=""><i class="bi bi-whatsapp"></i></a></li>
                <li class="nav-item"><a class="nav-link" href=""><i class="bi bi-instagram"></i></a></li>
                <li class="nav-item"><a class="nav-link" href=""><i class="bi bi-twitter"></i></a></li>
              </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>CopyRight On {{ date('Y') }} | Design By Fahizozil</p>
            </div>
        </div>
    </div>

    {{-- js link  --}}
    <script src="js/bootstrap.js"></script>
</body>

</html>
