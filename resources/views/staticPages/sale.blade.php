@extends('layouts.staticPage')
@section('content')

    <section class="content-section">
        <div class="container">
            @include('layouts.components.advantages')
        </div>
    </section>
    <section class="content-section">
        <div class="container text-center">
            {!! $content->where('section', 'catalog_title')->first()->getText() !!}
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
            {!! $content->where('section', 'price_examples')->first()->getText() !!}
        </div>
    </section>
@endsection