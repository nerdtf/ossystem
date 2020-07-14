@extends('layouts.main')

@section('main_info')

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">{{$post->title}}</h1>
            <p class="lead font-weight-normal">{{$post->description}}</p>
            <h4>Category:</h4>
            <p class="lead font-weight-normal">{{$post->category}}</p>
        </div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block">
            <img width="40%" height="40%"  src="/uploads/{{$post->image}}" alt="">
        </div>
    </div>

@endsection