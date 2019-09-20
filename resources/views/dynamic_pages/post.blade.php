<?php
/**
 * @var \App\Models\Post\Post $post
 */
?>

@extends('layouts.staticPage')

@section('content')
    <p>{{ $post->getTitle() }}</p>
@endsection