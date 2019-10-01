@extends('layouts.staticPage')
@section('content')
    <section style="padding-bottom: 0!important;">
        <div class="container">
            {!! $content->where('section', 'section_1')->first()->getText() !!}
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
    <section class="content-section">
        <div class="container mt40">
            {!! $content->where('section', 'section_2')->first()->getText() !!}
            @include('layouts.components.any_questions_end')
        </div>
    </section>
@endsection