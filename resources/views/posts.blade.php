<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <title>Blog</title>
</head>
<body>
    <div class="container">
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>

                <div>
                    {!! $post->body !!}
                </div>
            </article>
        @endforeach
    </div>
</body>
</html>
