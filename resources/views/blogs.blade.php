<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>
<body>
<div class="container">
    @if(session('status'))
        {{session('status')}}
        @endif
    <a href="{{route('create')}}">Create</a>
    <div class="cards">
        @foreach ($blogs as $blog)
        <div class="card">
            <h3><a href="{{route('blog',['blog' =>$blog->id])}}">{{$blog->title}}</a></h3>
            <img src="storage/{{$blog->image}}" alt="image" style="max-width: 300px">
            <span>{{$blog->category->name}}</span>
        </div>
            @endforeach
    </div>
</div>

</body>
</html>
