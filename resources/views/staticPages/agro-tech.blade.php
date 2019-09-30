@extends('layouts.staticPage')
@section('content')
    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container">
            {!! $content->where('section', 'section_1')->first()->getText() !!}
        </div>
        <div>
            @include('layouts.components.any_questions')
        </div>
    </section>
    <section class="content-section">
        @include('layouts.components.how-we-work')
    </section>
    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'we_serve')->first()->getText() !!}
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-title underline">Ремонт турбин для марок</h3>
                </div>
                <div class="col-md-12 mb30">
                    <p class="p-main" style="font-size: 18px"><b>Производители:</b></p>
                </div>

                <div class="col-md-12">
                    <div class="owl-carousel-3 ew-cursor">
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/aliedsignal.png"
                                 alt="{{ $metaTagContent->getH1() }} | Allied Signal"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/borgwarner.png"
                                 alt="{{ $metaTagContent->getH1() }} | Borg Warner"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/garett.png"
                                 alt="{{ $metaTagContent->getH1() }} | Garrett"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/holset.png"
                                 alt="{{ $metaTagContent->getH1() }} | Holset"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/ihi.png"
                                 alt="{{ $metaTagContent->getH1() }} | Ihi"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/kkk.png"
                                 alt="{{ $metaTagContent->getH1() }} | KKK"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/mitsubishi.png"
                                 alt="{{ $metaTagContent->getH1() }} | Mitsubishi"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/schwitzer.png"
                                 alt="{{ $metaTagContent->getH1() }} | Schwitzer"/>
                        </div>
                    </div> <!-- end owl-carousel-3 -->
                </div> <!-- end col-md-12 -->

            </div> <!-- end row -->
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            @include('layouts.components.full-contact-form')
        </div>
    </section>

    {{--    <section class="content-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-40">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <h3 class="section-title underline">Стоимости услуг</h3>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="pricing-box">--}}
{{--                        <div class="pricing-head">--}}
{{--                            <span class="striked" style="color: #f2f2f2">привет)</span>--}}
{{--                            <h2>Бесплатно</h2>--}}
{{--                            <h6>Диагностика на стенде</h6>--}}
{{--                            <i class="bg-icon fa fa-bar-chart"></i>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-head -->--}}
{{--                        <div class="pricing-foot" style="border-top: #ff4b22 solid 3px">--}}
{{--                            <a class="contact-modal" href="#contact-us"><b>Заказать</b></a>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-foot -->--}}
{{--                    </div>--}}
{{--                    <!-- /.pricing-box -->--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="pricing-box">--}}
{{--                        <div class="pricing-head">--}}
{{--                            <span>от</span>--}}
{{--                            <h2>₴ 2000</h2>--}}
{{--                            <h6>Стандартный ремонт</h6>--}}
{{--                            <i class="bg-icon fa fa-cog"></i>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-head -->--}}
{{--                        <div class="pricing-foot" style="border-top: #ff4b22 solid 3px">--}}
{{--                            <a class="contact-modal" href="#contact-us"><b>Заказать</b></a>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-foot -->--}}
{{--                    </div>--}}
{{--                    <!-- /.pricing-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col-sm-4 -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="pricing-box">--}}
{{--                        <div class="pricing-head">--}}
{{--                            <span>от</span>--}}
{{--                            <h2>₴ 4000</h2>--}}
{{--                            <h6>Капитальный ремонт</h6>--}}
{{--                            <i class="bg-icon fa fa-gears"></i>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-head -->--}}
{{--                        <div class="pricing-foot" style="border-top: #ff4b22 solid 3px">--}}
{{--                            <a class="contact-modal" href="#contact-us"><b>Заказать</b></a>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-foot -->--}}
{{--                    </div>--}}
{{--                    <!-- /.pricing-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col-sm-4 -->--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="pricing-box">--}}
{{--                        <div class="pricing-head">--}}
{{--                            <span>от</span>--}}
{{--                            <h2>₴ 4000</h2>--}}
{{--                            <h6>Капитальный ремонт</h6>--}}
{{--                            <i class="bg-icon fa fa-gears"></i>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-head -->--}}
{{--                        <div class="pricing-foot" style="border-top: #ff4b22 solid 3px">--}}
{{--                            <a class="contact-modal" href="#contact-us"><b>Заказать</b></a>--}}
{{--                        </div>--}}
{{--                        <!-- /.pricing-foot -->--}}
{{--                    </div>--}}
{{--                    <!-- /.pricing-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col-sm-4 -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection