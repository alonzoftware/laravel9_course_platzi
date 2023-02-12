@extends('template')

@section('content')

<h1>Listado</h1>

@foreach( $posts as $post )
<p>
    <strong>{{ $post['id'] }}</strong>
    <a href="{{ route('post', $post['slug']) }}">
        {{ $post['title'] }}
    </a>
</p>
@endforeach
@endsection
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>

    <h1>Blog List</h1>
    <hr>

    @foreach( $posts as $post )
    <p>
        <strong>{{ $post['id'] }}</strong>
        <a href="">
            {{ $post['title'] }}
        </a>
    </p>
    @endforeach

</body>

</html> -->