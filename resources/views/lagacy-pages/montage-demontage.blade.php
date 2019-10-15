@extends('layouts.staticPage')
@section('content')

    <section style="padding-bottom: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pb20">
                    <img style="width: 100%"
                         src="{{ asset('uploads') }}/images/wseries_r2b005797_large_6a149b199d0cee0f1852763cc89b501b76b32cb8.jpg"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
                <div class="col-md-8">
                    <p class="dropcap" style="text-align: justify">
                        Наши мастера <b style="font-style: italic">"TwinTurbo"</b> смогу произвести демонтаж — монтаж
                        турбонагнетателя с вашего автомобиля.
                        При обнаружении выхода из строя турбокомпрессора, возникает вопрос о его снятие, это может бить
                        для проведения осмотра, профилактики, либо же ремонта, в редких случаях приходится покупать
                        новый.
                        Замена турбины это трудоемкий процесс, и его должны проводить в специализированных местах,
                        квалифицированные специалисты.

                    </p>
                    <ul class="ul-style-2">
                        <li>
                            <i class="fa fa-check li-icon" style="color: #47b475"></i>
                            <p class="li-p">Для начала мы проведем визуальную "Диагностику" после компьютерную
                                диагностику, при необходимости произведем снятия, восстановление за тем происходит
                                монтаж турбокомпрессора, все роботы буду выполнены качественно, с гарантией, без
                                сопутствующих проблем.</p>
                        </li>
                        <li>
                            <i class="fa fa-check li-icon" style="color: #47b475"></i>
                            <p class="li-p">Наш турбосервис оснащен современным оборудование, подъемниками в количестве
                                5 шт., и 2 ямами, спец.инструментом, что позволяет нам обслуживать большое количество
                                клиентов и оперативно выполнять роботу.</p>
                        </li>
                        <li>
                            <i class="fa fa-check li-icon" style="color: #47b475"></i>
                            <p class="li-p">Цены на работ по демонтажу — монтажу турбокомпрессора начитается от 1000
                                гривен.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="underline p-main" style="margin-top: 20px">И так, как же все таки её демонтировать?</p>
            <br>
            <div class="timeline">
                <div class="timeline-row">
                    <div class="tm-icon">
                        <span class="fa fa-bolt"></span>
                    </div>
                    <div class="tm-detail">
                        <h5 class="mb10">Шаг 1</h5>
                        <p>
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
                        <p>Отключение датчиков турбонагнетателя, отсоединение всех патрубков —
                            вакуумных, масло слива, подачи.</p>
                    </div> <!-- end tm-detail -->
                </div> <!-- end timeline-row -->
                <div class="timeline-row">
                    <div class="tm-icon">
                        <span class="fa fa-wrench"></span>
                    </div>
                    <div class="tm-detail">
                        <h5 class="mb10">Шаг 3</h5>
                        <p>Как правило, снятие турбонагнетатель начинается со стороны выхлопной
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
                        <p>После мастер снимает верхний патрубки, если нужно он откручивает его от
                            крепежей, после уже переходит не посредство к турбонагнетателю,
                            большинство турбин можно снять без выпускного коллектора, ну мы
                            рекомендуем всегда снимать и выпускной коллектор да бы удостоверится о
                            его техническом состояние.
                            Готово: далее происходит диагностика и ремонт турбонагнетателя.
                        </p>
                    </div> <!-- end tm-detail -->
                </div> <!-- end timeline-row -->
            </div> <!-- end timeline -->
            <blockquote class="blockquote-reverse" style="font-size: 16px">
                <p><b>Квалифицированный монтаж турбонагнетателя:</b></p>
                На деле снятие — установка турбины означает, произвести действия, о которых мы писали выше, но все в
                обратной последовательности. Но как говорится — ломать не стоить. На практике монтаж турбины занимает
                больше времени.
            </blockquote>
            <p class="underline p-main" style="margin-top: 20px">Правила установки</p>
            <br>
            <div class="timeline">
                <div class="timeline-row">
                    <div class="tm-icon">
                        <span class="fa fa-cogs"></span>
                    </div>
                    <div class="tm-detail">
                        <h5 class="mb10">Шаг 1</h5>
                        <p>
                            Проверяем все комплектующие, убеждаемся что патрубок подачи масло с достаточной пропускной
                            способностью, меняем все уплотнители, гайки, шпильки, болты и хомуты на новые, старые
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
                        <p>Нужно совместить все отверстия, если же соединение фланцевые</p>
                    </div> <!-- end tm-detail -->
                </div> <!-- end timeline-row -->
                <div class="timeline-row">
                    <div class="tm-icon">
                        <span class="fa fa-check-circle-o"></span>
                    </div>
                    <div class="tm-detail">
                        <h5 class="mb10">Шаг 3</h5>
                        <p>После установки нужно вернуть все ранее снятые для удобства оборудование на место.</p>
                    </div> <!-- end tm-detail -->
                </div> <!-- end timeline-row -->
                <div class="timeline-row">
                    <div class="tm-icon">
                        <span class="fa fa-plug"></span>
                    </div>
                    <div class="tm-detail">
                        <h5 class="mb10">Шаг 4</h5>
                        <p>Подключить все датчики и шланги. Далее пробный запуск двигателя, ждем несколько минут на
                            холостых оборотах, увеличиваем обороты до 3500 тыс. в минуту и держим педаль акселератор
                            газа на протяжение 2‐х минут, если же нет посторонних шумов, белого сизого и черного дыма и
                            прочих моментов — все в порядке.
                        </p>
                    </div> <!-- end tm-detail -->
                </div> <!-- end timeline-row -->
            </div> <!-- end timeline -->
            <blockquote class="blockquote-reverse" style="font-size: 16px">
                <p><b>Возможно самому произвести демонтаж-монтаж турбонагнетателя?</b></p>
                Да можно, теоретически это легко, а на практике это очень трудоемкий процесс.
                Самостоятельное снятие — это определенный риск сделать что-то не так, лишние траты времени, и лишние нервы.

            </blockquote>
            <blockquote class="blockquote" style="font-size: 16px">
                Длительность роботы зависит от сложности место расположения турбонагнетателя, это может занять от 1‐го часа до 2‐х дней, в среднем снятие турбины происходит на протяжение 2-4-х часов.
            </blockquote>
        </div>
        @include('layouts.components.our_features')
        <div class="container">
            @include('layouts.components.any_questions')
        </div>
    </section>

@endsection