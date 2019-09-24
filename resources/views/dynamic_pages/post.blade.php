<?php
/**
 * @var \App\Models\Post\Post $post
 * @var \App\Models\Post\Post $randomPost
 */
?>

@extends('layouts.staticPage')

@section('content')
    <section>
        <div class="container">
            <p>{{ $post->getTitle() }}</p>
            {!! $post->getContent() !!}
            <p style="margin-top: 30px">Читайте также: <a href="/posts/{{ $randomPost->getAlias() }}">{{ $randomPost->getTitle() }}</a></p>
        </div>
    </section>
@endsection