<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <style>
              html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 50px;
    text-transform: uppercase;
    border-bottom: 2px solid;
    padding: 12px 0;
    color: #182c52;
}
h1{
    font-size: 20px;
    text-transform: uppercase;
    border-top: 2px solid;
    padding: 12px 0;
    color: #182c52;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
footer {
    background: #eee;
    padding: 20px;
    text-align: center;
}
        </style>
</head>
    <body>
<div class="flex-center position-ref full-height">
  <div class="content">
    <div class="title m-b-md">
        Post List
    </div>

    @foreach($posts as $post)
    <a class="post" href="/posts/{{ $post->id }}"><h1>Title: {{ $post->title }}</h1><br></a>
    <h4>Description: {{ $post->description }}</h4><br>
    <p>Content: {{ $post->content }} </p>
    @endforeach

  </div>
</div>
<footer> copyright 2022 Amir rezaei </footer>

</body>
</html>
