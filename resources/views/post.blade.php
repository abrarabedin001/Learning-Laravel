<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>
    
    <article>
        <a href="/posts/{{ $post->slug; }}"><h1>{!! $post->title !!}</h1></a>
        <h3>{!! $post->date !!}</h3>
        <div>
     
            {{-- @dd($post) --}}
            {!! $post->body() !!}
        </div>
      
    </article>
    <a href="/">go back</a>
</body>
</html>