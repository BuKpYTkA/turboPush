@extends('layouts.staticPage')
@section('content')

    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'section_1')->first()->getText() !!}
            @include('layouts.components.any_questions_end')
        </div>
    </section>

@endsection