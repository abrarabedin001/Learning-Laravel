@extends('layout')
@section('content')

    @foreach ($posts as $post)
        <article>

            <a href="/posts/{{ $post->slug; }}"><h1>{!! $post->title !!}</h1></a>
            <h3>{!! $post->date !!}</h3>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name; }}</a>
            </p>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <div>
                {!! $post->excerpt !!}
            </div>

        </article>
    @endforeach
@endsection('content')


