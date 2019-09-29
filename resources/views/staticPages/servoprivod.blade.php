@extends('layouts.staticPage')
@section('content')
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-center" style="margin-bottom: 20px">
                    <h3 class="section-title underline">Сервопривод турбины</h3>
                </div> <!-- end section-header -->
                <div class="col-md-4 pb20">
                    <img style="width: 100%"
                         src="{{ asset('images/system/servoprivod') }}/photo_2019-09-29_00-39-44.jpg"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
                <div class="col-md-8">
                    <p class="dropcap" style="text-align: justify">
                        Большая часть современных автомобилей выпускается с турбированными двигателями, а тем временем турбины все чаще стали оснащать электронным актуатором "Сервоприводом".
                        Самая популярная поломка — уже не механического типа, а поломка сервопривода "электроного актуатора турбины".

                        Что бы про диагностировать и отремонтировать сервопривод мы используем тестер-программатор нового поколения от Английского производителя TurboTechnics ATP-100, с его помощу, мы можем произвести диагностику сервопривода прям на автомобиле, не снимая турбины. Так же ATP100 имеет функцию программирования, с его помощью при необходимости мы сбрасываем настройки и выставляем базовые заводские.

                    </p>
                </div>
            </div>
        </div>
        @include('layouts.components.any_questions')
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="dropcap" style="text-align: justify">
                        Мы производим качественный ремонт акуаторов турбины "Сервопривода" - Hella, Siemens VDO, Mahle и т.д.

                        После ремонта турбонагнетателя, мы производим отсройку саплового апарата "Геометрии" на спец.стенде.
                        У нас имеется все необходимые элементы для восстановления вашего Сервопривода — червячный механизм, Сектора позиций, двигатель актуатора, электро платы(верхняя крышка), практически на все виды актуаторов, и большой список новых оригинальных Сервоприводов в сборе.

                    </p>
                </div>
                <div class="col-md-4 pb20">
                    <img style="width: 100%"
                         src="{{ asset('images/system/servoprivod') }}/IMG_0894.jpg"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
            </div>
        </div>
    </section>
@endsection