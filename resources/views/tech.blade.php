@extends('farshell.layout')

{{--left  sidebar section  --}}
@section('left-sidebar-content')
<h3 style="border-bottom: 1px solid #e1e1e1"> <i> Techonology </i> </h3>
@foreach ($tech as $value)
<div class="card" id="card" style="width: 12rem">
    <a href="/read?read={{$value->post_title}}"><img class="card-img-top" src="upload/{{$value->post_img}}"
        alt="news-image"></a>
    <div class="card-body">
        <h6 class="card-title"> <a href="/read?read={{$value->post_title}}"> {{$value->post_title}} </a></h6>
    </div>
</div>
@endforeach
<p class="text-center my-3" style="border-bottom:1px solid #e1e1e1"> -advertisement- </p>
@endsection



{{-- headlines section  --}}
@section('headline-content')

<h2 style="border-bottom: 2px solid #e1e1e1">Tech</h2>
@foreach ($technology as $val )
    
<div class="card mb-3 my-3" id="category-pages-center">
    <div class="row g-no">
        <div class="col-md-4">
           <a href="/read?read={{$val->post_title}}"> <img src="upload/{{$val->post_img}}" alt="sport image" height="100%" width="100%"> </a>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><a href="/read?read={{$val->post_title}}"> {{$val->post_title}} </a></h5>
                <p class="card-text">{{ substr($val->description,0,254).'...' }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection




{{-- right sidebar section  --}}
@section('right-sidebar-content')
<p class="text-center" style="border-bottom:1px solid #e1e1e1"> -advertisement- </p>
<h1 class="tech"><i> Latest News </i> </h1>
@foreach ($recent as $value)
<div class="card mb-3" id="right-latest-news"  style="width:100%">
    <div class="row g-0">
        <div class="col-md-4">
            <a href="/read?read={{$value->post_title}}">  <img src="upload/{{$value->post_img}}" class="" alt="news-image" height="90px" width="100%"> </a>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h6 class="card-title"> <a href="/read?read={{$value->post_title}}">{{ $value->post_title }}</a></h6>
                    <p style="font-size:10px;" class="card-title"> {{$value->updated_at}} </p>
            </div>
        </div>
       
    </div>
</div>
@endforeach
@endsection