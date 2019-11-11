@extends('layouts.staticPage')
@section('content')

    <section class="content-section" style="padding-top: 50px">
        <div class="container">
            {!! $content->where('section', 'section_1')->first()->getText() !!}
        </div> <!-- end container -->
    </section>
    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'map_title')->first()->getText() !!}

            <div class="row">
            <div class="col-md-6">
                @include('layouts.components.contact-form')
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1958.2144446019686!2d30.457966860042657!3d50.46922295651822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cde79e9da45d%3A0xb4dbcde25dacf93f!2zVHdpbnR1cmJvIC0g0YDQtdC80L7QvdGCINGC0YPRgNCx0LjQvQ!5e0!3m2!1suk!2sua!4v1572259104152!5m2!1suk!2sua"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
        </div>
    </section>
@endsection