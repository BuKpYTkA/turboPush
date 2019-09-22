<?php
/**
 * @var \App\Models\CarInfoPage\CarInfoPage $carInfoPage
 */
?>

@extends('layouts.staticPage')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img height="200px" src="{{asset('uploads') . '/' . $carInfoPage->getImagePath() }}" alt="">
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-9">
                    <h2 style="margin-left: 20px">Приобретение
                        турбонагнетателя {{ $carInfoPage->getBrand() }} {{ '(' . $carInfoPage->getBrandAdditional() . ')' }}</h2>
                    <br>
                    <p class="underline" style="font-size: 25px; margin-bottom: 15px; margin-left: 20px"> Почему стоит
                        приобрести турбину на
                        ваш {{ $carInfoPage->getBrandAdditional() ? $carInfoPage->getBrandAdditional() : $carInfoPage->getBrand() }}
                        у нас?</p>
                    <br>
                    <ul class="ul-style-2">
                        <li>
                            <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">Турбосервис "TwinTurbo" подставляет большой выбор восстановленных и новых турбонагнетателей.</p>
                        </li>
                        <li>
                            <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">В процессе ремонта мы используем качественные запчасти от проверенных производителей.</p>
                        </li>
                        @if($carInfoPage->getModels())
                            <li>
                                <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">У нас в распоряжение турбины для таких моделей {{ $carInfoPage->getBrand() }}: {{ $carInfoPage->getModels() }}.</p>
                            </li>
                        @endif
                        <li>
                            <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">На все турбокомпрессора мы предоставляем <b style="font-style: italic">гарантию до 2‐х лет.</b></p>
                        </li>
                    </ul>
                    <p class="underline" style="font-size: 25px; margin-bottom: 15px; margin-left: 20px">
                        Цены на турбонагнетатели {{ $carInfoPage->getBrand() }}
                    </p>
                    <br>
                    <ol class="ol-style-4">
                        <li class="margin-list">В среднем стоимость турбины начитается
                            от {{ $carInfoPage->getMinPrice() }}
                            до {{ $carInfoPage->getMaxPrice() }} гривен.
                        </li>
                        <li class="margin-list">Цена на Турбину {{ $carInfoPage->getBrand() }} зависит от:
                            <div style="margin-left: 35px; margin-top: 10px">
                                <p><span><i class="fa fa-check" style="color: #ff4b22"></i></span> Завода изготовителя
                                </p>
                                <p><span><i class="fa fa-check" style="color: #ff4b22"></i></span> От модели автомобиля
                                </p>
                                <p><span><i class="fa fa-check" style="color: #ff4b22"></i></span> Вида турбонагнетателя
                                </p>
                            </div>
                        </li>
                        <li class="margin-list">В связи с тем, что цена нового турбонагнетателя может вас не устроить,
                            мы предлагаем нашим
                            клиентам предоставить нам возможность диагностировать и при надобности произвести ремонт.
                        </li>
                    </ol>
                </div>
            </div>
            <p class="underline" style="font-size: 25px; margin-bottom: 15px; margin-left: 20px">
                Стоимость ремонта турбонагнетателя
            </p>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <span class="striked" style="color: #f2f2f2">привет)</span>
                                <h2>Бесплатно</h2>
                                <h6>Диагностика</h6>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <span>от</span>
                                <h2>₴ {{ $carInfoPage->getStandard() }}</h2>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <span>от</span>
                                <h2>₴ {{ $carInfoPage->getCapital() }}</h2>
                                <h6 style="line-height: 19px">Капитальное восстановление</h6>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <span>от</span>
                                <h2>₴ {{ $carInfoPage->getMinPrice() }}</h2>
                                <h6>Купить турбину</h6>
                                <i class="bg-icon fa fa-shopping-cart"></i>
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
                @include('layouts.components.any_questions')
                <div class="row">
                    <div class="col-md-6">
                        <p style="text-align: justify" class="dropcap">
                            Мастера <b style="font-style: italic">"TwinTurbo"</b> специализируются на реставрации турбокомпрессора и актуторов. Мы
                            восстановим
                            турбину и выдадим вам гарантию до 2-х лет.
                            Реставрируем все типы турбокомпрессоров, любого производителя, любой сложности, в кротчайшие
                            сроки.
                            Оставьте заявку либо, позвоните нам для консультации, скажите нашему оператору какой у вас
                            автомобиль, модель, год выпуска, объем двигателя, и мы подберем для вас турбонагнетателя,
                            или
                            отремонтируем ваш турбонагнетателя, мы работаем по всей Украине.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('uploads') }}/images/auto-mechanic.jpg" style="width: 100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection