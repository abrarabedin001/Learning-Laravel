@extends('layout')
@section('content')
<body>
    
    <article>
        <a href="/posts/{{ $post->id; }}">
        
            <h1>{!! $post->title !!}</h1></a>
            <p>
                By <a href="#">{{ $post->user->name; }}</a>
            </p>
        <h3>{!! $post->date !!}</h3>
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

        <div>
     
            {{-- @dd($post) --}}
            {!! $post->body !!}
        </div>
      
    </article>
    <a href="/">go back</a>
@endsection('content')