@extends('layouts.app')

@section('content')
<div class="container">
    <div class="custom-file">
      <form method="post" action="{{route('avatar.store')}}" enctype="multipart/form-data">
      @csrf
        <input type="file" name="avatar" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
        <input type="submit" class="btn btn-success" value="Go">
      </form>
    </div>


   
  <div class="card-columns">
   @foreach($avatars as $avatar)
    <div class="card">
        <img src="{{$avatar->getUrl()}}" class="card-img-top" alt="...">
    </div>
     @endforeach
  </div>
   
</div>
<g><g><path fill=