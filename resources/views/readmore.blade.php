@extends('farshell.layout')


{{-- center section  --}}
@section('headline-content')
    {{-- readmore page dynamic records  --}}

    @foreach ($readmore as $value)
        <h2 class="my-2"> {{ $value->post_title }} </h2>
        {{-- post_detials  --}}
        <div class="post-details">
            <span class="mx-3"><i class="bi bi-pencil"></i> by {{$value->username}}</i> </span>
            <span class="mx-3"><i class="bi bi-tag"></i> {{$value->name}}</i> </span>
            <span class="mx-3"> <i class="bi bi-calendar"></i> {{substr($value->created_at,0,11)}}</i>
            </span>
        </div>
        {{-- post img  --}}
        <div class="img my-2">
            <img src="upload/{{ $value->post_img }}" alt="post news" height="100%" width="100%">
            <p class="my-2"> {{ $value->post_title }} </p>
        </div>
        {{-- post description  --}}
        <p style="font-family: monospace" class="my-2">  {{ substr($value->description,0,209)}} </p>
        <p style="font-family: monospace" class="my-2">  {{ substr($value->description,209,400)}} </p>
        <p style="font-family: monospace" class="my-2">  {{ substr($value->description,400,700)}} </p>
       
        <p style="font-family: monospace" class="my-2">  {{ substr($value->description,700,1000)}} </p>
        <p style="font-family: monospace" class="my-2">  {{ substr($value->description,1000,5000)}} </p>
    @endforeach
@endsection


{{-- left sidebar-section  --}}
@section('left-sidebar-content')
@endsection

{{-- right sidebar section  --}}
@section('right-sidebar-content')
<p class="text-center" style="border-bottom:1px solid #e1e1e1"> -advertisement- </p>
<h4 style="border-bottom: 1px solid #e1e1e1" class="my-2"><i>Latest News</i></h4>
@foreach ($latest as $row)
{{-- start card  --}}
    <div class="card mb-3" id="card-hover" style="width: 100%;border:none;">
        <div class="row g-no">
            {{-- 1st col in card  --}}
            <div class="col-md-4">
                <img src="upload/{{$row->post_img}}" alt="news-image" height="80px" width="100%">
            </div>
             {{-- 2nd col in card  --}}
            <div class="col-md-8">
                <div class="detials ">
                    <span style="font-style:italic;"> <i class="mx-1 bi bi-tag">{{$row->name}}</i> </span>
                    <span style="font-style:italic;"> <i class="mx-1 bi bi-calendar">{{substr($row->created_at,0,11)}}</i></span>
                </div>
                <h6 class="card-title my-2"> {{$row->post_title}} </h6>
            </div>
        </div>
    </div>
 @endforeach
@endsection



