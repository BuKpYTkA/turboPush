<?php
/**
 * @var \App\Models\Post\Post[] $posts
 */
?>

@extends('layouts.staticPage')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-6 col-sm-6 blog-box mb40">
                        <div class="blog-img-box">
                            <a href="posts/{{ $post->getAlias() }}"><img
                                        src="{{ asset('uploads') . '/' . $post->getImagePath() }}"
                                        alt="{{ $post->getTitle() }} | TwinTurbo" class="img-responsive"></a>
                        </div>
                        <h5 class="mt20 blog-title"><a href="posts/{{ $post->getAlias() }}">{{ $post->getTitle() }}</a>
                        </h5>
                        <small class="text-muted">{{ $post->getCreatedAt() }}</small>
                        <p class="mt10 lighter-text">{{ substr($post->getDescription(), 0, 100) }}... <a
                                    href="/posts/{{ $post->getAlias() }}">Читать дальше</a></p>
                    </div> <!-- end blog-box -->
                @endforeach
            </div>
            <div class="text-center">
                @if($posts->previousPageUrl())
                    <a href="{{ $posts->previousPageUrl()}}" class="st-btn full-rounded">&larr; Назад</a>
                @endif
                @if($posts->nextPageUrl())
                    <a href="{{ $posts->nextPageUrl() }}" class="st-btn full-rounded">Вперед &rarr;</a>
                @endif
            </div>
        </div> <!-- end col-md-9 -->
    </section>

@endsection