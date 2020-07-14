@extends('layouts.main')

@section('main_info')
    <h1 class="display-3">Edit Post:</h1>
    <p>Here we can edit posts</p>
@endsection

@section('posts')

    <form action="/posts/{{$post->id}}" method="post">

        @include('layouts.embed.errors')

        {{csrf_field()}}
        {{method_field('put')}}

        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" value="{{$post->title}}" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control"  type="text" name="description" id="slug">{{$post->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <input class="form-control"  name="category" id="category" value="{{$post->category}}" >
        </div>

        <div class="form-group">
            <label for="image">Upload image:</label>
            <input class="form-control"   type="file" name="image" id="image">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>

    </form>
@endsection