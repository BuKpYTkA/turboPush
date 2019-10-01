@extends('layouts.staticPage')
@section('content')
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container">
            {!! $content->where('section', 'section_1')->first()->getText() !!}
        </div>
        @include('layouts.components.any_questions')
    </section>
    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'section_2')->first()->getText() !!}
            @include('layouts.components.any_questions_end')
        </div>
    </section>
@endsection