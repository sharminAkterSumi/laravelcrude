@extends('layouts.nav_slacing')
@section('missing')

<div class="card col-lg-5  mx-auto mt-5">
    
    <div class="card-header">
       Edit post
    </div>
    <div class="card-body">
        <form action="{{route('postupdate',$posts->id)}}" method="POST">
          @csrf
          @method('put')
                    <input value="{{$posts->title}}" type="text" name="title" class="form-control" placeholder="title" >
                   <span class="text-danger">
                   @error('title')
                    {{$message}}
                    @enderror
                  
                   </span>
                    
                    <textarea name="detail" class="form-control" >{{$posts->detail}}</textarea>
                    <span class="text-danger">
                   @error('detail')
                    {{$message}}
                    @enderror
                  
                   </span>
                   <button class="btn btn-primary w-100">update</button>
        </form>
    </div>
</div>


@endsection