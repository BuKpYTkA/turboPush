<?php
/**
 * @var \App\Models\CarInfoPage\CarInfoPage $carInfoPage
 * @var array $models
 */
?>

@extends('layouts.staticPage')

@section('content')
    <section>
        <div class="container" style="margin-bottom: 40px!important;">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img height="200px" src="/{{$carInfoPage->getImagePath() }}" alt="{{ $metaTagContent->getTitle() }}">
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-9">
                    <h2 style="margin-left: 20px">Ремонт турбин по заводским параметрам {{ $carInfoPage->getBrand() }} {{ '(' . $carInfoPage->getBrandAdditional() . ')' }}</h2>
                    <br>
                    <p class="underline" style="font-size: 25px; margin-bottom: 15px; margin-left: 20px">Почему стоит доверится "TwinTurbo"?</p>
                    <br>
                    <ul class="ul-style-2">
                        <li>
                            <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">Гарантия на ремонт до 2-ух лет</p>
                        </li>
                        <li>
                            <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">Современное оборудования</p>
                        </li>
                        <li>
                            <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">Свое СТО</p>
                        </li>
                        <li>
                            <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">Опытные мастера</p>
                        </li>
                        @if($carInfoPage->getModels())
                            <li>
                                <i class="fa fa-circle list-icon li-icon"></i><p class="li-p">Сервис "TwinTurbo" производить ремонт следующих моделей {{ $carInfoPage->getBrand() }}:</p>
                                <ul class="ul-style-2">

                                @foreach($models as $model)
                                        <li><i class="fa fa-check list-icon"></i>{{ trim($model) }}</li>
                                @endforeach
                                </ul>
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
                                <p><span><i class="fa fa-check" style="color: #f24c2a"></i></span> Завода изготовителя
                                </p>
                                <p><span><i class="fa fa-check" style="color: #f24c2a"></i></span> От модели автомобиля
                                </p>
                                <p><span><i class="fa fa-check" style="color: #f24c2a"></i></span> Вида турбонагнетателя
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
                <div class="row mb40">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <span class="striked" style="color: #f2f2f2">привет)</span>
                                <h2>Бесплатно</h2>
                                <h6>Диагностика</h6>
                                <i class="bg-icon fa fa-bar-chart"></i>
                            </div>
                            <!-- /.pricing-head -->
                            <div class="pricing-foot" style="border-top: #f24c2a solid 3px">
                                <a class="contact-modal" href="#contact-us"><b>Оставить заявку</b></a>
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
                                <h6 class="inline-main">Стандартный ремонт</h6>
                                <i class="bg-icon fa fa-cog"></i>
                            </div>
                            <!-- /.pricing-head -->
                            <div class="pricing-foot" style="border-top: #f24c2a solid 3px">
                                <a class="contact-modal" href="#contact-us"><b>Оставить заявку</b></a>
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
                                <h6 class="inline-main">Капитальное восстановление</h6>
                                <i class="bg-icon fa fa-gears"></i>
                            </div>
                            <!-- /.pricing-head -->
                            <div class="pricing-foot" style="border-top: #f24c2a solid 3px">
                                <a class="contact-modal" href="#contact-us"><b>Оставить заявку</b></a>
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
                                <h2>₴ 250</h2>
                                <h6>Ремонт Сервопривода</h6>
                                <i class="bg-icon fa fa-plug"></i>
                            </div>
                            <!-- /.pricing-head -->
                            <div class="pricing-foot" style="border-top: #f24c2a solid 3px">
                                <a class="contact-modal" href="#contact-us"><b>Оставить заявку</b></a>
                            </div>
                            <!-- /.pricing-foot -->
                        </div>
                        <!-- /.pricing-box -->
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
            </div>
        </div>
        @include('layouts.components.any_questions')
    </section>
@endsection