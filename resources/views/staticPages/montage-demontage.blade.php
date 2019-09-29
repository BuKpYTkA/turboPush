@extends('layouts.staticPage')
@section('content')
    <section class="content section" style="padding-bottom: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="dropcap section-text" style="text-align: justify">
                        Наши мастера <b style="font-style: italic">"TwinTurbo"</b> смогу произвести демонтаж — монтаж
                        турбонагнетателя с вашего автомобиля.
                        При обнаружении выхода из строя турбокомпрессора, возникает вопрос о его снятие, это может бить
                        для проведения осмотра, профилактики, либо же ремонта, в редких случаях приходится покупать
                        новый.
                        Замена турбины это трудоемкий процесс, и его должны проводить в специализированных местах,
                        квалифицированные специалисты.

                    </p>
                </div> <!-- end col-md-12 -->
                <div class="col-md-12 col-md-offset-5">
                    <h4 class="underline">И так, как же все таки её демонтировать?</h4>
                </div>
                <div class="col-md-5 pb20">
                    <img style="width: 100%"
                         src="https://via.placeholder.com/350x400"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
                <div class="col-md-7">
                    <div class="timeline">
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-bolt"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 1</h5>
                                <p class="section-text">
                                    Производят обесточивание автомобиля, и обеспечивают себе доступ к ней.
                                    В процессе демонтажа может понадобится, снять аккумулятор,
                                    катализатор, стартер либо генератор, и прочий узлы по необходимости, так
                                    же есть автомобили на которых приходиться вывешивать "двигатель с
                                    коробкой передач" плоть до того — что нужно отделять кузов автомобиля от
                                    рамы.
                                </p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-dashboard"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 2</h5>
                                <p class="section-text">Отключение датчиков турбонагнетателя, отсоединение всех
                                    патрубков —
                                    вакуумных, масло слива, подачи.</p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-wrench"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 3</h5>
                                <p class="section-text">Как правило, снятие турбонагнетатель начинается со стороны
                                    выхлопной
                                    системы откручивают трубу, так же это может быть — катализатор или
                                    сажевый фильтр которые прилегает к горячей части турбокомпрессора,
                                    сохраняем все уплотнители, болты, гайки, шпильки для дальнейшего подбора
                                    и замены на новые.</p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-cog"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 4</h5>
                                <p class="section-text">После мастер снимает верхний патрубки, если нужно он откручивает
                                    его от
                                    крепежей, после уже переходит не посредство к турбонагнетателю,
                                    большинство турбин можно снять без выпускного коллектора, ну мы
                                    рекомендуем всегда снимать и выпускной коллектор да бы удостоверится о
                                    его техническом состояние.
                                    Готово: далее происходит диагностика и ремонт турбонагнетателя.
                                </p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                    </div> <!-- end timeline -->
                </div>
                <div class="col-md-12">
                    <h4 class="underline">Квалифицированный монтаж турбонагнетателя</h4>
                    <p class="section-text">
                        На деле снятие — установка турбины означает, произвести действия, о которых мы писали выше, но
                        все в обратной последовательности. Но как говорится — ломать не стоить. На практике монтаж
                        турбины занимает больше времени.
                    </p>
                </div>
                <div class="col-md-12">
                    <h4 class="underline">Правила установки</h4>
                </div>
                <div class="col-md-7">
                    <div class="timeline">
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-cogs"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 1</h5>
                                <p class="section-text">
                                    Проверяем все комплектующие, убеждаемся что патрубок подачи масло с достаточной
                                    пропускной
                                    способностью, меняем все уплотнители, гайки, шпильки, болты и хомуты на новые,
                                    старые
                                    элементы не подлежат вторичному использованию.
                                </p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-circle-o"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 2</h5>
                                <p class="section-text">Нужно совместить все отверстия, если же соединение фланцевые</p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-check-circle-o"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 3</h5>
                                <p class="section-text">После установки нужно вернуть все ранее снятые для удобства
                                    оборудование на место.</p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                        <div class="timeline-row">
                            <div class="tm-icon">
                                <span class="fa fa-plug"></span>
                            </div>
                            <div class="tm-detail">
                                <h5 class="mb10">Шаг 4</h5>
                                <p class="section-text">Подключить все датчики и шланги. Далее пробный запуск двигателя,
                                    ждем несколько минут на
                                    холостых оборотах, увеличиваем обороты до 3500 тыс. в минуту и держим педаль
                                    акселератор
                                    газа на протяжение 2‐х минут, если же нет посторонних шумов, белого сизого и черного
                                    дыма и
                                    прочих моментов — все в порядке.
                                </p>
                            </div> <!-- end tm-detail -->
                        </div> <!-- end timeline-row -->
                    </div> <!-- end timeline --> <!-- end timeline -->
                </div>
                <div class="col-md-5 pb20">
                    <img style="width: 100%"
                         src="https://via.placeholder.com/350x400"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="underline">Возможно самому произвести демонтаж-монтаж турбонагнетателя?</h4>
                <p class="section-text">
                    Да можно, теоретически это легко, а на практике это очень трудоемкий процесс.
                    Самостоятельное снятие — это определенный риск сделать что-то не так, лишние траты времени, и лишние нервы.

                </p>
            </div>
        </div>
        @include('layouts.components.any_questions')
    </section>
    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
@endsection