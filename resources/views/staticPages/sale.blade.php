@extends('layouts.staticPage')
@section('content')

    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
    <section class="content-section">
        <div class="container text-center">
            <h3 class="section-title underline">Каталог турбин по маркам автомобилей</h3>
            <div class="mt40">
                @foreach($carInfoPages as $carInfoPage)
                    <a class="a-flash" href="/buy/{{ $carInfoPage->getPageAlias() }}"><img class="mb10" width="130px"
                                                                                              src="/uploads/{{ $carInfoPage->getImagePath() }}"
                                                                                              alt="{{ $carInfoPage->getBrand() }} | Twin Turbo"></a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-header text-center" style="margin-bottom: 20px">
                    <h3 class="section-title underline">Пример цен</h3>
                </div> <!-- end section-header -->
                <div class="col-md-10 col-md-offset-1">
                    <ol class="ol-style-4">
                        <li class="margin-list">
                            Новые оригинальные турбины - от 7000грн до 27000 грн
                        </li>
                        <li class="margin-list">
                            Новые китайские турбины - от 4500грн до 13000 грн
                        </li>
                        <li class="margin-list">
                            Реставрация турбины - от 5000грн до 8000 грн
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection