@extends('layouts.staticPage')
@section('content')

    <section class="content-section" style="padding-top: 50px">
        <div class="container">
            {!! $content->where('section', 'section_1')->first()->getText() !!}
        </div> <!-- end container -->
        <div class="container">
            {!! $content->where('section', 'map_title')->first()->getText() !!}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.73711179624!2d30.4611551159444!3d50.46461989422446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cdd3da590379%3A0xbe23bf1751e2cbda!2z0YPQuy4g0KHQtdC80YzQuCDQpdC-0YXQu9C-0LLRi9GFLCA4LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1570109865305!5m2!1sru!2sua"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
@endsection