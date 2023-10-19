
@extends('layout')

@section('content')
    <div class="container">
        <article>
            <h1><?= $post->title ?></h1>
            <div><?= $post->body ?></div>
        </article>
        <a href="/">Go Back</a>
    </div>
@endsection


