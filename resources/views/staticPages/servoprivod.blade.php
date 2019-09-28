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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit
                        anim id est laborum.
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit
                        anim id est laborum.
                    </p>
                </div>
                <div class="col-md-4 pb20">
                    <img style="width: 100%"
                         src="{{ asset('images/system/servoprivod') }}/IMG_0978.jpg"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
                <div class="col-md-12 text-center">
                    <h4 class="underline">Причины поломки сервопривода</h4>
                </div>
                <div class="col-md-4 pb20">
                    <img style="width: 100%"
                         src="{{ asset('images/system/servoprivod') }}/photo_2019-09-29_00-39-44.jpg"
                         alt="{{ $metaTagContent->getTitle() }}">
                </div>
                <div class="col-md-8">
                    <p class="dropcap" style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit
                        anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection