@extends('layouts.staticPage')
@section('content')

    <section class="content-section zero-padding parallax-section" data-parallax="scroll"
             data-image-src="{{ asset('frontEnd') }}/images/demo-img-2-reverse.jpg" data-speed="0.4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-4 gray-bg">
                    <div class="pt90 pl60 pr60 pb30 plxs30 prxs30">
                        <div class="row">
                            <div class="col-md-12 mb60">
                                <h5 class="underline">Диагностика турбонагнетателя</h5>
                                <p>Автомобильная турбины применяются на дизельных и бензиновых моторах на большинство
                                    современных автомобилях. Режим турбо-наддува дает значительное прирост л.с. и при
                                    этом снижается потребление топлива. При не соблюдение правил Т.О., при долгой и
                                    интенсивной нагрузке происходит повреждение турбины, в последствие влекут за собой
                                    внушительные затраты на ремонт. Прежде всего перед восстановлением или заменой
                                    турбины на новую, необходимо произвести правильную диагностику, она укажет на
                                    причину выхода из строя турбонагнетателя, это поспособствует сберечь ваши сбережения
                                    и ваше время.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div> <!-- end gray-bg -->
            </div> <!-- end row -->
        </div> <!-- end container-fluid -->
    </section>

    <section class="content-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="text-align: center">
                            <h3 class="panel-title capitalize">Диагностика турбокомпрессора</h3>
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            <div class="container">
                                Диагностику произведем с визуального осмотра всей системы турбонаддува. В процессе
                                специалист осматривает наличие масляных потёков, явных и механических дефектов, нагаров
                                (просекания выхлопных газов) т.д.
                                <p>Диагностика турбин в 2‐х вариантах:</p>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <ol class="ol-style-3">
                                            <li>Без демонтажа, не посредственно на автомобиле.</li>
                                            <li>С демонтажем турбонагнетателя и с проверкой на спец.стенде.</li>
                                        </ol>
                                    </div> <!-- end col-md-3 -->
                                </div>
                                <p>Осмотр и диагностирование турбины без демонтажа позволит выявить присутствие осевого люфта и степень  износа уплотнений и проверить наддув. Также без снятия турбины мастер проверят  работа способность клапанов и  элементы привода, управления турбины. В 55% случаях проблема ее появления и неисправность определяют при данном виде диагностики.
                                    Если визуально турбонагнетатель работает удовлетворительно, но проявляются признаки ее неисправности, тогда необходима снимать турбину и диагностировать на специальном стенде.
                                </p>
                                <div class="col-sm-8 col-xs-12">
                                    <p><strong style="color: black">С помощью нужного оборудования специалисты проверяют и выясняют:</strong></p>
                                    <ul class="ul-style-2">
                                        <li><i class="fa fa-check list-icon"></i>Из-за чего произошла утечка масла</li>
                                        <li><i class="fa fa-check list-icon"></i>Наличие дисбаланса</li>
                                        <li><i class="fa fa-check list-icon"></i>Уровень износа деталей турбины и пр</li>
                                        <li><i class="fa fa-check list-icon"></i>Правильность работы изменяемой геометрии турбонагнетателя</li>
                                    </ul>
                                    <p>
                                        Проверка турбины на стенде позволить обнаружить причину неисправности и провести соответствующий ремонт. Для корректной диагностики турбины мастер рекомендуют изначально проверить работу двигателя, топливной и электронной системы.
                                        Самые основные причины выхода из стоя турбины
                                        Неисправности турбо-наддува часто встречаются как у дизельных так и у бензиновых автомобилях.
                                    </p>
                                </div> <!-- end col-md-3 -->
                                <div class="col-sm-4 col-xs-12">
                                    <img src="/frontEnd/images/portfolio/380-360/01.jpg" alt="Диагностика Турбокомпрессора TwinTurbo" style="width: 100%">
                                </div>
                            </div>
                        </div> <!-- end panel-body -->
                        <div class="panel-footer">
                        </div> <!-- end panel-footer -->
                    </div> <!-- end panel -->
                </div> <!-- end col-md-4 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

@endsection