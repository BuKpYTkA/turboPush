@extends('layouts.staticPage')
@section('content')

    <section style="padding-top: 50px">
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
                    @include('layouts.components.contact-form')
                </div> <!-- end col-md-8 -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
@endsection