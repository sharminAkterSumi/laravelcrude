

@extends('layouts.nav_slacing')
@section('missing')
@if(session()->has('success'))
<div class="alert alert-success">

{{session('success')}}

</div>


@endif
<div class="card col-lg-8  mx-auto mt-5 ">
    
    <div class="card-header bg-warning">
        All posts
    </div>
    <div class="card-body">
       <table class="table table-responsive">
            <tr>
                <th>#</th>
                <th>title</th>
                <th>detail</th>
                <th>Actions</th>    
            </tr>
       
        @foreach($posts as $key=>$post)
        <tr>
              <td>{{++$key}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->detail}}</td>
              <td>
                <div class="btn-group">
                <a href="{{route('editpost',$post->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <!-- <a href="#" class="btn btn-danger btn-sm">Delete</a> -->
                <form action="{{route('deletepost',$post->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>

                </form>

                </div>
              
              </td>

            </tr>
        @endforeach
          
       </table>
       <div class="ml-5 p-10">
        {{$posts->links()}}
       </div>
    </div>
</div>

@endsection