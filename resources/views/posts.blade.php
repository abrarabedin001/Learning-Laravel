@extends('layout')
@section('content')
    
    @foreach ($posts as $post)
        <article>
            
            <a href="/posts/{{ $post->slug; }}"><h1>{!! $post->title !!}</h1></a>
            <h3>{!! $post->date !!}</h3>
            <div>
                {!! $post->excerpt !!}
            </div>
          
        </article>
    @endforeach
@endsection('content')  

    
