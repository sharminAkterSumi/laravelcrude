

@extends('layouts.nav_slacing')
@section('missing')

@if(session()->has('success'))
<div class="alert alert-success">

{{session('success')}}


</div>


@endif
<div class="card col-lg-5  mx-auto mt-5">
    
    <div class="card-header">
        Add post
    </div>
    <div class="card-body">
        <form action="{{route('poststore')}}" method="POST">
          @csrf
                    <input type="text" name="title" class="form-control" placeholder="title" value="{{old('title')}}">
                   <span class="text-danger">
                   @error('title')
                    {{$message}}
                    @enderror
                   </span>
                    
                    <textarea name="detail" class="form-control" cols="30" rows="10">{{old('detail')}}</textarea>
                    <span class="text-danger">
                   @error('detail')
                    {{$message}}
                    @enderror
                   </span>
                    
                   <button class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>


@endsection
