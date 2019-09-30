<?php
/**
 * @var \App\Models\CarInfoPage\CarInfoPage[] $carInfoPages
 */
?>

@extends('layouts.home')

@section('content')
    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container">
            {!! $content->where('section', 'services')->first()->getText() !!}
        </div> <!-- end container -->
        @include('layouts.components.any_questions')
    </section>
    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'about_us')->first()->getText() !!}
        </div> <!-- end container -->
    </section>
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container text-center">
            <h3 class="section-title underline">Марки авто и транспорта</h3>
            <div class="mt40">
                @foreach($carInfoPages as $carInfoPage)
                    <a class="a-flash" href="/repair/{{ $carInfoPage->getPageAlias() }}"><img class="mb10" width="130px"
                                                                                             src="/uploads/{{ $carInfoPage->getImagePath() }}"
                                                                                             alt="{{ $carInfoPage->getBrand() }} | Twin Turbo"></a>
                @endforeach
            </div>
        </div>
        @include('layouts.components.contact-us')
    </section>
    <section class="content-section">
        @include('layouts.components.how-we-work')
    </section>
    <section style="padding-top: 50px">
        <div class="container">
            @include('layouts.components.full-contact-form')
        </div> <!-- end container -->
    </section>

@endsection