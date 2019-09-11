@extends('layouts.staticPage')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <!-- ========== SECTION HEADER ========== -->
                <div class="section-header">
                    <h3 class="section-title underline">We are here!</h3>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod.</p>
                </div> <!-- end section-header -->

                <div class="mb50 col-sm-6 col-md-12">
                    <h6 class="underline">Address</h6>
                    <p>A203, Ishwarya Residency, <br>
                        Kaspate Wasti, Wakad Road, <br>
                        Pune, India - 411 057</p>
                </div>

                <div class="mb50 col-sm-6 col-md-12">
                    <h6 class="underline">Contact Us</h6>
                    <p>+1 (123) 456-7890 <br>
                        +1 (456) 567-1234 <br>
                        support@themesease.com</p>
                </div>

                <div class="">
                    <h6 class="underline">Follow Us</h6>
                    <p>
                        <a href="https://www.facebook.com/ThemesEase" class="si-style-2" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/ThemesEase" class="si-style-2" target="_blank"><i
                                    class="fa fa-twitter"></i></a>
                        <a href="#" class="si-style-2"><i class="fa fa-google-plus"></i></a>
                    </p>
                </div>
            </div> <!-- end col-md-4 -->

            <div class="col-md-8">

                <!-- ========== SECTION HEADER ========== -->
                <div class="section-header">
                    <h3 class="section-title underline">Drop us a line!</h3>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod.</p>
                </div> <!-- end section-header -->
                @if (session()->has('ok'))
                    <p>
                        <strong style="color: green">
                            {{ session()->get('ok') }}
                        </strong>
                    </p>
                @endif
                <form class="" id="form" method="post" action="{{ route('order.create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Имя<strong>*</strong></label>
                        @if ($errors->has('name'))
                            <span role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <input type="text" class="form-control input-style-2" id="name" name="name"
                               placeholder="Введите имя" required="" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email<strong>*</strong></label>
                        @if ($errors->has('email'))
                            <span role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <input type="email" class="form-control input-style-2" id="email" name="email"
                               placeholder="Введите email адрес" required="" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-md-1" style="margin-top: 15px">
                                <label for="" style="font-size: 16px;">+380</label>
                            </div>
                            <div class="col-md-11">
                                <label for="subject">Телефон</label>
                                @if ($errors->has('phone'))
                                    <span role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                <input type="text" class="form-control input-style-2" id="phone" name="phone"
                                       placeholder="Введите номер телефона" value="{{ old('phone') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Текст Сообщения<strong>*</strong></label>
                        @if ($errors->has('message'))
                            <span role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                        <textarea class="form-control input-style-2" id="message" name="message"
                                  placeholder="Текст сообщения.." required="" rows="3">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right pull-right">Submit
                    </button>
                </form>
            </div> <!-- end col-md-8 -->

        </div> <!-- end row -->
    </div> <!-- end container -->

    <style>
        strong {
            color: red;
        }
    </style>

@endsection