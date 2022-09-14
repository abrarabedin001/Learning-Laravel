@extends('layout')
@section('content')
<body>
    
    <article>
        <a href="/posts/{{ $post->id; }}">
        
            <h1>{!! $post->title !!}</h1></a>
        <h3>{!! $post->date !!}</h3>
        <div>
     
            {{-- @dd($post) --}}
            {!! $post->body !!}
        </div>
      
    </article>
    <a href="/">go back</a>
@endsection('content')