@extends('layouts.staticPage')
@section('content')
    <section style="padding-bottom: 0!important;">
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
            <p class="underline p-main">Цены на услуги:</p>
            <br>
            <div class="row mb-40">
                <div class="col-md-4">
                    <div class="pricing-box">
                        <div class="pricing-head">
                            <span class="striked" style="color: #f2f2f2">привет)</span>
                            <h2>Бесплатно</h2>
                            <h6>Диагностика на стенде</h6>
                            <i class="bg-icon fa fa-bar-chart"></i>
                        </div>
                        <!-- /.pricing-head -->
                        <div class="pricing-foot" style="border-top: #ff4b22 solid 3px">
                            <a class="contact-modal" href="#contact-us"><b>Заказать</b></a>
                        </div>
                        <!-- /.pricing-foot -->
                    </div>
                    <!-- /.pricing-box -->
                </div>
                <div class="col-md-4">
                    <div class="pricing-box">
                        <div class="pricing-head">
                            <span>от</span>
                            <h2>₴ 2000</h2>
                            <h6>Стандартный ремонт</h6>
                            <i class="bg-icon fa fa-cog"></i>
                        </div>
                        <!-- /.pricing-head -->
                        <div class="pricing-foot" style="border-top: #ff4b22 solid 3px">
                            <a class="contact-modal" href="#contact-us"><b>Заказать</b></a>
                        </div>
                        <!-- /.pricing-foot -->
                    </div>
                    <!-- /.pricing-box -->
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-md-4">
                    <div class="pricing-box">
                        <div class="pricing-head">
                            <span>от</span>
                            <h2>₴ 4000</h2>
                            <h6>Капитальный ремонт</h6>
                            <i class="bg-icon fa fa-gears"></i>
                        </div>
                        <!-- /.pricing-head -->
                        <div class="pricing-foot" style="border-top: #ff4b22 solid 3px">
                            <a class="contact-modal" href="#contact-us"><b>Заказать</b></a>
                        </div>
                        <!-- /.pricing-foot -->
                    </div>
                    <!-- /.pricing-box -->
                </div>
                <!-- /.col-sm-4 -->
            </div>
        </div>
        @include('layouts.components.our_features')
        <div class="container mt40">
            <p class="underline p-main">Наш сервис обслуживает турбонагнетатели сельскохозяйственной и спецтехники
                как:</p>
            <br>
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
            <div class="row">
                <div class="col-md-12 mb30 mt60">
                    <p class="p-main" style="font-size: 18px"><b>Производители:</b></p>
                </div>

                <div class="col-md-12">
                    <div class="owl-carousel-3 ew-cursor">
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('uploads') }}/images/7ac64a_f0f50582bdf24d8182a54f4745872636_mv2.gif"
                                 alt="Sample Image"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('uploads') }}/images/c45fc6f7b23164cde2eb53f348225002.png"
                                 alt="Sample Image"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('uploads') }}/images/deutz-1-282998.png"
                                 alt="Sample Image"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('uploads') }}/images/caterpillar-rologia-haritidis.png"
                                 alt="Sample Image"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('uploads') }}/images/liebherr-logo-vector-61945.png"
                                 alt="Sample Image"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('uploads') }}/images/john-deere-logo-black-and-white.png"
                                 alt="Sample Image"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('uploads') }}/images/new-holland-logo-vector-43938.png"
                                 alt="Sample Image"/>
                        </div>
                    </div> <!-- end owl-carousel-3 -->
                </div> <!-- end col-md-12 -->

            </div> <!-- end row -->
            @include('layouts.components.any_questions')
        </div>
    </section>
@endsection