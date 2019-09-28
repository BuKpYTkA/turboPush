@extends('layouts.staticPage')
@section('content')
    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container">
            <div class="row mb-40">
                <div class="col-md-4 pb20">
                    <img style="width: 100%"
                         src="{{ asset('uploads') }}/images/wseries_r2b005797_large_6a149b199d0cee0f1852763cc89b501b76b32cb8.jpg"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
                <div class="col-md-8">
                    <p class="dropcap" style="text-align: justify">
                        Турбосервис <b style="font-style: italic">"TwinTurbo"</b> производит востоновление, профилактику
                        турбонагнетателей всех видов —
                        спецтехники и сельскохозяйственной техники любого производителя.
                        Когда турбонагнетатель выходит из строя, его почти всегда возможно отремонтировать, не прибегая
                        к
                        покупкам Б\У или новой турбины.
                        Наши мастера произведут точную диагностику вашей турбины, а так же работы по восстановлению,
                        произведут замену неремонтопригодных элементов, соберут, отстроят, так же мы предоставляем
                        большой
                        выбор оригинального комплектующего.

                        У нас есть филиалы в разных регионах, мы работаем по всей Украине, принимаем посылки по новой
                        почте,
                        авто люкс, ин тайм, а так же принимаем посылки передачи водителем рейсовым транспортом, для
                        постоянных клиентов и партнеров действует система скидок.
                    </p>
                </div>
            </div>
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
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-title underline">Наш сервис обслуживает</h3>
                </div>
            </div>
            <p class="p-main" style="font-size: 18px"><b>Техника:</b></p>
            <div class="row">
                <div class="col-md-2">
                    <ul class="ul-style-2" style="margin-bottom: 10px">
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Трактора</p>
                        </li>
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Сеялки</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="ul-style-2" style="margin-bottom: 10px">
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Комбайны</p>
                        </li>
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Погрузчики</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="ul-style-2" style="margin-bottom: 10px">
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Подъёмники</p>
                        </li>
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Катки</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="ul-style-2" style="margin-bottom: 10px">

                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Тягачи</p>
                        </li>
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">Бульдозеры</p>
                        </li>

                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="ul-style-2" style="margin-bottom: 10px">
                        <li>
                            <i class="fa fa-check list-icon li-icon"></i>
                            <p class="li-p">И другие</p>
                        </li>
                    </ul>
                </div>
            </div>
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
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-title underline">Заказать бесплатный просчет на ремонт турбины</h3>

                </div>
                <div class="col-md-6 col-md-offset-3">
                    @include('layouts.components.contact-form')
                </div>
            </div>
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