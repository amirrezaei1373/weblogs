@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
  <div class="content">
    <div class="title m-b-md">
        Post List
    </div>

    <p> {{ $name }}</p>

    @foreach($posts as $post)
    <p> {{ $post['type'] }} -- {{ $post['crust'] }}</p>
    @endforeach

  </div>
</div>
@endsection
