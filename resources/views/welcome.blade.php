<?php
/**
 * @var \App\Models\CarInfoPage\CarInfoPage[] $carInfoPages
 */
?>

@extends('layouts.home')

@section('content')
    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-center">
                    <h3 class="section-title underline">Стоимость услуг</h3>
                    <p class="section-subtitle">One stop solution for a perfect business website!</p>
                </div> <!-- end section-header -->

                <div class="col-sm-3">
                    <div class="pricing-box">
                        <div class="pricing-head">
                            <span class="striked">$ 10.0</span>
                            <h2>Free</h2>
                            <h6>Get the feel</h6>
                            <i class="bg-icon ion-lock-combination"></i>
                        </div>
                        <!-- /.pricing-head -->
                        <div class="pricing-body">
                            <ul>
                                <li>Basic Features <i class="icon ion-ios-help" data-toggle="tooltip"
                                                      data-placement="left" title="Something more about this"></i></li>
                                <li>One User <i class="icon ion-ios-help" data-toggle="tooltip" data-placement="left"
                                                title="Something more about this"></i></li>
                                <li>10 Records <i class="icon ion-ios-help" data-toggle="tooltip" data-placement="left"
                                                  title="Something more about this"></i></li>
                                <li>Basic Feature</li>
                                <li>Only One User</li>
                                <li>Only 10 Records</li>
                            </ul>
                        </div>
                        <!-- /.pricing-body -->
                        <div class="pricing-foot">
                            <a href="#">Start Now</a>
                        </div>
                        <!-- /.pricing-foot -->
                    </div>
                    <!-- /.pricing-box -->
                </div>
                <!-- /.col-sm-4 -->

                <div class="col-sm-3">
                    <div class="pricing-box popular">
                        <div class="pricing-head">
                            <span class="striked">$ 100.0</span>
                            <h2>$ 50.0</h2>
                            <h6>Try & buy</h6>
                            <i class="bg-icon ion-ribbon-b"></i>
                        </div>
                        <!-- /.pricing-head -->
                        <div class="pricing-body">
                            <ul>
                                <li>Basic Features <i class="icon ion-ios-help" data-toggle="tooltip"
                                                      data-placement="left" title="Something more about this"></i></li>
                                <li>Five Users <i class="icon ion-ios-help" data-toggle="tooltip" data-placement="left"
                                                  title="Something more about this"></i></li>
                                <li>100 Records <i class="icon ion-ios-help" data-toggle="tooltip" data-placement="left"
                                                   title="Something more about this"></i></li>
                                <li>Some Advanced Features</li>
                                <li>Only Five Users</li>
                                <li>Up-to 100 Records</li>
                            </ul>
                        </div>
                        <!-- /.pricing-body -->
                        <div class="pricing-foot">
                            <a href="#">Buy Now</a>
                        </div>
                        <!-- /.pricing-foot -->
                    </div>
                    <!-- /.pricing-box -->
                </div>
                <!-- /.col-sm-4 -->

                <div class="col-sm-3">
                    <div class="pricing-box">
                        <div class="pricing-head">
                            <span class="striked">$ 1000.0</span>
                            <h2>$ 500.0</h2>
                            <h6>More & Cheap</h6>
                            <i class="bg-icon ion-bowtie"></i>
                        </div>
                        <!-- /.pricing-head -->
                        <div class="pricing-body">
                            <ul>
                                <li>Basic Features <i class="icon ion-ios-help" data-toggle="tooltip"
                                                      data-placement="left" title="Something more about this"></i></li>
                                <li>Unlimited Users <i class="icon ion-ios-help" data-toggle="tooltip"
                                                       data-placement="left" title="Something more about this"></i></li>
                                <li>Unlimited Records <i class="icon ion-ios-help" data-toggle="tooltip"
                                                         data-placement="left" title="Something more about this"></i>
                                </li>
                                <li>All Features</li>
                                <li>Create Unlimited Users</li>
                                <li>Create Unlimited Records</li>
                            </ul>
                        </div>
                        <!-- /.pricing-body -->
                        <div class="pricing-foot">
                            <a href="#">Buy Now</a>
                        </div>
                        <!-- /.pricing-foot -->
                    </div>
                    <!-- /.pricing-box -->
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-3">
                    <div class="pricing-box">
                        <div class="pricing-head">
                            <span class="striked">$ 1000.0</span>
                            <h2>$ 500.0</h2>
                            <h6>More & Cheap</h6>
                            <i class="bg-icon ion-bowtie"></i>
                        </div>
                        <!-- /.pricing-head -->
                        <div class="pricing-body">
                            <ul>
                                <li>Basic Features <i class="icon ion-ios-help" data-toggle="tooltip"
                                                      data-placement="left" title="Something more about this"></i></li>
                                <li>Unlimited Users <i class="icon ion-ios-help" data-toggle="tooltip"
                                                       data-placement="left" title="Something more about this"></i></li>
                                <li>Unlimited Records <i class="icon ion-ios-help" data-toggle="tooltip"
                                                         data-placement="left" title="Something more about this"></i>
                                </li>
                                <li>All Features</li>
                                <li>Create Unlimited Users</li>
                                <li>Create Unlimited Records</li>
                            </ul>
                        </div>
                        <!-- /.pricing-body -->
                        <div class="pricing-foot">
                            <a href="#">Buy Now</a>
                        </div>
                        <!-- /.pricing-foot -->
                    </div>
                    <!-- /.pricing-box -->
                </div>
                <!-- /.col-sm-4 -->

            </div> <!-- end row -->
        </div> <!-- end container -->
        @include('layouts.components.any_questions')
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-center">
                    <h3 class="section-title underline">О нас</h3>
                </div> <!-- end section-header -->

                <div class="col-md-12 mb60 text-center">
                    <p>Наша компания успешно осваивает рынок по всей Украине.
                        Сильные стороны сервиса Твин Турбо – надежность и скорость работы благодаря большому опыту мастеров и ремонту большого количество турбин! В практике ремонта разнообразные турбокомпрессоры, начиная от легковых заканчивая грузовыми и сельскохозяйственной техникой.
                        Благодаря наличия  современного оборудования включая в себе стенды по регулировки и балансировке происходит контроль качества произведенного ремонта. Гарантия на реставрированные турбины до 2 лет.  Работаем с мелкими и крупными предприятиями
                    </p>
                </div> <!-- end col-md-12 -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container text-center">
            <h3 class="section-title underline">Марки авто и транспорта</h3>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod.</p>
            <div class="mt40">
                @foreach($carInfoPages as $carInfoPage)
                    <a class="a-flash" href="/brand/{{ $carInfoPage->getPageAlias() }}"><img class="mb10" width="100px"
                                                                                             height="100px"
                                                                                             src="/uploads/{{ $carInfoPage->getImagePath() }}"
                                                                                             alt="{{ $carInfoPage->getBrand() }} | Twin Turbo"></a>
                @endforeach
            </div>
        </div>
        @include('layouts.components.contact-us')
    </section>
    <section class="content-section">
        @include('layouts.components.how-we-work')
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


@endsection