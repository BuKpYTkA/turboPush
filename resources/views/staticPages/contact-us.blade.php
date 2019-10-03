@extends('layouts.staticPage')
@section('content')

    <section class="content-section" style="padding-top: 50px">
        <div class="container">
            <div class="row mb60 mt60">
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 feature text-center">
                    <div class="icon underline longer-underline">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h5 class="feature-title"><b>Звоните</b></h5>
                    @foreach($phoneNumbers as $phoneNumber)
                        <p class="feature-desc"><a style="color: black"
                                                   href="tel:{{ $phoneNumber->getPhone() }}">{{ $phoneNumber->getFormat() }}</a></p>
                    @endforeach
                </div> <!-- end feature -->
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 feature text-center">
                    <div class="icon underline longer-underline">
                        <i class="fa fa-calendar-check-o"></i>
                    </div>
                    <h5 class="feature-title"><b>Режим работы</b></h5>
                    <p class="feature-desc">пн-сб: 9:00-18:00</p>
                    <p class="feature-desc">вс: выходной</p>
                </div> <!-- end feature -->
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 feature text-center">
                    <div class="icon underline longer-underline">
                        <img width="50px" src="{{ asset('images/system') }}/ukraine-ico.png" alt="">
                    </div>
                    <h5 class="feature-title">Присылайте</h5>
                    <p class="feature-desc">Мы работаем по всей Украине</p>
                </div> <!-- end feature -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h3 class="panel-title capitalize"><b>Оплата</b></h3>
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            <p>Оплату за ремонт и замену турбины и ТНВД мы берем только по факту выполненных работ.
                                Вы можете оплатить наши услуги любым удобным способом:</p>
                            <ul class="ul-style-2">
                                <li><i class="fa fa-check list-icon"></i>Безналичным платежом на текущий счет;</li>
                                <li><i class="fa fa-check list-icon"></i>Наложенный платеж при получении турбины в филиале
                                    транспортной компании;
                                </li>
                                <li><i class="fa fa-check list-icon"></i>Наличными на месте, когда забираете турбину.</li>
                            </ul>
                            <div class="row text-center">
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-credit-card-alt fa-5x"></i>
                                </div>
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-cc-visa fa-5x"></i>
                                </div>
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-cc-mastercard fa-5x"></i>
                                </div>
                            </div>
                        </div> <!-- end panel-body -->
                    </div> <!-- end panel -->
                </div> <!-- end col-md-4 -->
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h3 class="panel-title capitalize"><b>Доставка</b></h3>
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            <p>Мы ремонтируем и продаем турбины по всей Украине.

                                Выбирайте подходящий вам способ доставки:
                            </p>
                            <p style="height: 19px; margin-bottom: 0!important;"></p>
                            <ul class="ul-style-2">
                                <li><i class="fa fa-check list-icon"></i>Новая почта;</li>
                                <li><i class="fa fa-check list-icon"></i>Автолюкс;</li>
                                <li><i class="fa fa-check list-icon"></i>Интайм;</li>
                                <li><i class="fa fa-check list-icon"></i>Передача с водителем рейсового транспорта.</li>
                            </ul>
                            <div class="row text-center">
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-truck fa-5x"></i>
                                </div>
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-dropbox fa-5x"></i>
                                </div>
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-bus fa-5x"></i>
                                </div>
                                <div class="icon col-md-3 col-xs-6">
                                    <i class="fa fa-cubes fa-5x"></i>
                                </div>
                            </div>
                        </div> <!-- end panel-body -->
                    </div> <!-- end panel -->
                </div> <!-- end col-md-4 -->
            </div>

            <p class="p-main mb40 mt40">
                Главный офис в Киеве
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.73711179624!2d30.4611551159444!3d50.46461989422446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cdd3da590379%3A0xbe23bf1751e2cbda!2z0YPQuy4g0KHQtdC80YzQuCDQpdC-0YXQu9C-0LLRi9GFLCA4LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1570109865305!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div> <!-- end container -->
    </section>
@endsection