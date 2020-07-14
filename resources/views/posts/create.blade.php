@extends('layouts.main')

@section('main_info')
    <h2>New post creation</h2>
@endsection

@section('posts')
    <form action="/posts" method="post" enctype="multipart/form-data">
        @include('layouts.embed.errors')
        {{csrf_field()}}

        <div class="form-group">
            <label for="title">Enter title</label>
            <input class="form-control" name="title" type="text" id="title" placeholder="Enter title here">
        </div>
        <div class="form-group">
            <label for="description">Enter description</label>
            <textarea class="form-control" name="description" rows="3" id="description" placeholder="Enter description here"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Enter category</label>
            <input class="form-control" name="category" type="text" id="category" placeholder="Enter category here">
        </div>
        <div class="form-group">
            <label for="image">Upload image:</label>
            <input class="form-control"  type="file" name="image" id="image">
        </div>
        <div class="form-group ">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection