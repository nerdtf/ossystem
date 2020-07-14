@extends('layouts.main')

@section('main_info')
    <h1 class="display-3">All our posts</h1>
@endsection



@section('posts')
    @foreach($posts as $post )

        <div class="col-md-4">
            <p style="margin-left: -30px">
                <img src="uploads/{{$post->image}}"   width="230" height="200">
            </p>
            <h2>{{$post->title}}</h2>
            <p>{{$post->description}} </p>
            <p><a class="btn btn-secondary" href="/posts/{{$post->id}}" role="button">View details &raquo;</a></p>
        </div>

    @endforeach

@endsection