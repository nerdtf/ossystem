@extends('layouts.main')

@section('main_info')
    <h1 class="display-3">Grid with all posts</h1>
@endsection

@section('posts')

    <input  type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for titles..">

    <table id="myTable">
        <tr class="header">
            <th style="width:20%;">Title</th>
            <th style="width:20%;">Description</th>
            <th style="width:20%;">Category</th>
            <th style="width:20%;">Image</th>
            <th style="width:20%;">Action</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->category}}</td>
            <td><img width="150px" height="100px" src="uploads/{{$post->image}}" alt=""></td>
            <td>
                <div class="btn-group-vertical">

                    <a class="btn btn-primary btn-sm" role="button" href="/posts/{{$post->id}}">Show details</a>
                    <a class="btn btn-info btn-sm" role="button" href="/posts/{{$post->id}}/edit">Edit</a>
                    <form action="/posts/{{$post->id}}" method="post">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <button class="btn btn-light"><img height="10%" width="10%" src="uploads/delete.png" alt=""></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </table>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>



@endsection




