
@extends('farshell.layout')

@section('title')
   Where You Get All Type News
@endsection



{{--left  sidebar section  --}}
@section('left-sidebar-content')
<h3 style="border-bottom: 1px solid #e1e1e1"> <i>Techonology</i> </h3>
@foreach ($tech as $value)
<div class="card" id="card" style="width: 12rem">
   <a href="/read?read={{$value->post_title}}"> <img class="card-img-top" src="upload/{{$value->post_img}}"
        alt="news-image"></a>
    <div class="card-body">
        <h6 class="card-title"> <a href="/read?read={{$value->post_title}}">{{$value->post_title}} </a></h6>
    </div>
</div>
@endforeach
<p class="text-center my-3" style="border-bottom:1px solid #e1e1e1"> -advertisement- </p>
@endsection



{{-- center section  --}}
{{-- headline news section  --}}
@section('headline-content')
   @foreach ($latest_news as $headline)
<div class="card mb-3" id="card-mean-head" style="width:100%">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="card-body">
                <h4 class="card-title"> <a href="/read?read={{$headline->post_title}}">{{ $headline->post_title }}</a> </h4>

                <p class="card-text">{{ substr($headline->description,0,300).'...' }}</p>
            </div>
        </div>
        <div class="col-md-6">
           <a href="/read?read={{$headline->post_title}}"> <img src="upload/{{ $headline->post_img }}" class="" alt="news-image" height="180px" width="100%"></a>
        </div>
    </div>
</div>
{{-- varaible  for braking loop  --}}
@php
    $break = null;
@endphp
@if (!$break)
    @break
@endif
@endforeach    {{-- end headline foreach loop  --}}
@endsection



{{-- latest news section  --}}
@section('latest-news')
@foreach ($latest_news as $row)
    
@if ($loop->first)
    @continue
@endif
<div class="card " id="card-latest-news" style="width: 11.5rem;height:253px;">
     <a href="/read?read={{$row->post_title}}   "><img class="card-img-top" src="upload/{{ $row->post_img }}"
        alt="news-image" > </a>
    <div class="card-body">
        <p style="font-weight: 500;font-size:15px;" class="card-title"> <a href="/read?read={{$row->post_title}}"> {{ substr($row->post_title,0,70) .'...' }} </a> </p>
    </div>
</div>
@endforeach
@endsection

{{-- pagination  --}}
@section('paginate')

    {{ $latest_news->links() }}

@endsection

{{-- right sidebar section  --}}
@section('right-sidebar-content')
<p class="text-center" style="border-bottom:1px solid #e1e1e1"> -advertisement- </p>
<h1 class="tech"><i> Recent News </i> </h1>
@foreach ($recent as $value)

@if ($loop->first )
   @continue
@endif


<div class="card mb-3" id="right-latest-news"  style="width:100%">
    <div class="row g-0">
        <div class="col-md-4">
           <a href="/read?read={{$value->post_title}}"> <img src="upload/{{$value->post_img}}" class="" alt="news-image" height="90px" width="100%"></a>
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


{{-- new container section  --}}
{{-- sports  --}}
@section('sport')
<div class="home-cat">
<span  style="border-bottom: 1px solid #e1e1e1;"><i> <h4> Sports </h4></i> </span>
<span style="border-bottom:2px solid blue;"><a href="{{route('sport')}}" >See More <i class="bi bi-arrow-right"></a></i></span>
</div>
@foreach ($sport as $row )
    <div class="card mx-2.5 my-2" id="card-hover" style="width:11.5rem;float:left;height:253px;">
        <a href="/read?read={{$row->post_title}}"><img class="card-img-top" src="upload/{{ $row->post_img }}"
           alt="news-image"> </a>
       <div class="card-body">
           <p style="font-weight: 500;font-size:15px;" class="card-title"> <a href="/read?read={{$row->post_title}}"> {{ substr($row->post_title,0,70) .'..' }} </a> </p>
       </div>
    </div>
 @endforeach
 
@endsection

{{-- politics Section  --}}
@section('Politics')
<div class="home-cat">
    <span  style="border-bottom: 1px solid #e1e1e1;"><i> <h4> Politics </h4></i> </span>
    <span style="border-bottom:2px solid blue;"><a href="{{route('politics')}}" >See More <i class="bi bi-arrow-right"></i></a></span>
    </div>
@foreach ($politics as $row )
<div class="card mx-2.5 my-2" id="card-hover" style="width:11.5rem;float:left;height:253px;">
    <a href="/read?read={{$row->post_title}}"><img class="card-img-top" src="upload/{{ $row->post_img }}"
       alt="news-image"> </a>
   <div class="card-body">
       <p style="font-weight: 500;font-size:15px;" class="card-title"> <a href="/read?read={{$row->post_title}}"> {{ substr($row->post_title,0,70) .'..' }} </a> </p>
   </div>
</div>
@endforeach

@endsection

                  {{-- WAR  SECTION --}}

 @section('War')
 <div class="home-cat">
    <span  style="border-bottom: 1px solid #e1e1e1;"><i> <h4> War </h4></i> </span>
    <span style="border-bottom:2px solid blue;"><a  href="{{route('war')}}" >See More <i class="bi bi-arrow-right"></i></a></span>
    </div>
@foreach ($war as $row )
<div class="card mx-2.5 my-2" id="card-hover" style="width:11.5rem;float:left;height:253px;">
    <a href="/read?read={{$row->post_title}}"><img class="card-img-top" src="upload/{{ $row->post_img }}"
       alt="news-image"> </a>
   <div class="card-body">
       <p style="font-weight: 500;font-size:15px;" class="card-title"> <a href="/read?read={{$row->post_title}}"> {{ substr($row->post_title,0,70) .'..' }} </a> </p>
   </div>
</div>
@endforeach
@endsection

{{-- Entertainment  SECTION  --}}

@section('Entertain')
<div class="home-cat">
    <span  style="border-bottom: 1px solid #e1e1e1;"><i> <h4> Entertainment</h4></i> </span>
    <span style="border-bottom:2px solid blue;"><a  href="{{route('entertain')}}">See More<i class="bi bi-arrow-right"></i></a></span>
    </div>
@foreach ($enter as $row )
<div class="card mx-2.5 my-2" id="card-hover" style="width:11.5rem;float:left;height:253px;">
    <a href="/read?read={{$row->post_title}}"><img class="card-img-top" src="upload/{{ $row->post_img }}"
       alt="news-image"> </a>
   <div class="card-body">
       <p style="font-weight: 500;font-size:15px;" class="card-title"> <a href="/read?read={{$row->post_title}}"> {{ substr($row->post_title,0,70) .'..' }} </a> </p>
   </div>
</div>
@endforeach
@endsection
