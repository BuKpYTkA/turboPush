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
            <div class="text-center">
                <h2 class="section-title underline">{{ $post->getTitle() }}</h2>
            </div>
            {!! $post->getContent() !!}
            <p style="margin-top: 30px">Читайте также: <a
                        href="/posts/{{ $randomPost->getAlias() }}">{{ $randomPost->getTitle() }}</a></p>
        </div>
    </section>
@endsection