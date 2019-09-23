<?php
/**
 * @var \App\Models\Post\Post $post
 */
?>

@extends('layouts.staticPage')

@section('content')
    <section>
        <div class="container">
            <p>{{ $post->getTitle() }}</p>
            {!! $post->getContent() !!}
        </div>
    </section>
@endsection