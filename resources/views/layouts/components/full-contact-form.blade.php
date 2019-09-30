<div class="row">

    <div class="col-md-4">

        <!-- ========== SECTION HEADER ========== -->
        <div class="section-header">
            <h3 class="section-title underline">Мы тут</h3>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod.</p>
        </div> <!-- end section-header -->

        <div class="mb50 col-sm-6 col-md-12">
            <h6 class="underline"><b>Наш адрес</b></h6>
            <p>A203, Ishwarya Residency, <br>
                Kaspate Wasti, Wakad Road, <br>
                Pune, India - 411 057</p>
        </div>

        <div class="mb50 col-sm-6 col-md-12">
            <h6 class="underline"><b>Позвоните нам</b></h6>
            @foreach($phoneNumbers as $phoneNumber)
                <p><a href="tel:{{ $phoneNumber->getPhone() }}">{{ $phoneNumber->getFormat() }}</a></p>
            @endforeach
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
            <h3 class="section-title underline">Заказать бесплатный просчет на ремонт турбины</h3>
            <p class="section-subtitle">Оставте свою заявку и наши операторы свяжуться с вами в ближайшее время</p>
        </div> <!-- end section-header -->
        @include('layouts.components.contact-form')
    </div> <!-- end col-md-8 -->

</div> <!-- end row -->