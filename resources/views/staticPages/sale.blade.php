@extends('layouts.staticPage')
@section('content')

    <section class="content-section">
        <div class="container text-center">
            {!! $content->where('section', 'section_1')->first()->getText() !!}
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'price_examples')->first()->getText() !!}
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages-sale')
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'section_2')->first()->getText() !!}
        </div>
    </section>
    <section class="content-section">
        <div class="container text-center">
            {!! $content->where('section', 'catalog_title')->first()->getText() !!}
            <div class="mt40">
                @foreach($carInfoPages as $carInfoPage)
                    <a class="a-flash" href="/buy/{{ $carInfoPage->getPageAlias() }}"><img class="mb10" width="130px"
                                                                                           src="/uploads/{{ $carInfoPage->getImagePath() }}"alt="{{ $carInfoPage->getBrand() }} | Twin Turbo"></a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="content-section" style="padding-bottom: 0!important;">
        <div class="container">
            {!! $content->where('section', 'why_us')->first()->getText() !!}
        </div>
        @include('layouts.components.any_questions')
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-title underline">Производители турбокомпрессоров с которыми мы работаем</h3>
                </div>
                <div class="col-md-12 mb30">
                    <p class="p-main" style="font-size: 18px"><b>Производители:</b></p>
                </div>

                <div class="col-md-12">
                    <div class="owl-carousel-3 ew-cursor">
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/aliedsignal.png"
                                 alt="{{ $metaTagContent->getH1() }} | Allied Signal"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/borgwarner.png"
                                 alt="{{ $metaTagContent->getH1() }} | Borg Warner"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/garett.png"
                                 alt="{{ $metaTagContent->getH1() }} | Garrett"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/holset.png"
                                 alt="{{ $metaTagContent->getH1() }} | Holset"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/ihi.png"
                                 alt="{{ $metaTagContent->getH1() }} | Ihi"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/kkk.png"
                                 alt="{{ $metaTagContent->getH1() }} | KKK"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/mitsubishi.png"
                                 alt="{{ $metaTagContent->getH1() }} | Mitsubishi"/>
                        </div>
                        <div class="text-center ">
                            <img class="carousel-custom-item" src="{{ asset('images') }}/agro-brands/schwitzer.png"
                                 alt="{{ $metaTagContent->getH1() }} | Schwitzer"/>
                        </div>
                    </div> <!-- end owl-carousel-3 -->
                </div> <!-- end col-md-12 -->

            </div> <!-- end row -->
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            {!! $content->where('section', 'section_3')->first()->getText() !!}
            @include('layouts.components.any_questions_end')
        </div>
    </section>
@endsection