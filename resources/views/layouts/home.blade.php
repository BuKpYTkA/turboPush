<!doctype html>
<html class="no-js" lang="en">

@include('layouts.components.head')

<!-- ==================================================
Body: Classes
header-shadow - Set shadow for header & menu
dark-menu - Change menu to dark [Don't use with light-header]
light-header - Set light background to header [Don't use with dark-menu]
dark-header - Set dark background to header
bold-menu - For bolder links
semi-trans-header - set transparency to header [Use with 'light-header' or 'dark-header']
center-logo - Logo at center
small-header - For lesser height
nav-hidden - Open nav on icon click
================================================== -->
<body class="header-shadow dark-header">

<!-- ========== LOADER ========== -->
@include('layouts.components.loader')

<!-- ========== HEADER ========== -->
@include('layouts.components.navbar')
@include('layouts.components.contact-modal')

<!-- ========== MAIN ========== -->

<!-- ========== HOME SECTION ========== -->
<div id="section1" class="parallax-window pt60" data-parallax="scroll" data-image-src="{{ asset('uploads') }}/{{config('app.defaultBannerImage')}}" data-speed="0.6">
    <div style="background: rgba(212,212,212,0.65);">
    <div class="container">
        <div class="row mt60 pb80">
            <div class="col-md-6">
                <h1 class="headline black-color">Impress Every Visitor!</h1>
                <ul class="ul-style-3 black-color">
                    <li><i class="fa fa-send list-icon"></i>Responsive Template</li>
                    <li><i class="fa fa-hand-o-right list-icon"></i>Retina Ready</li>
                    <li><i class="fa fa-thumbs-up list-icon"></i>155+ HTML Pages</li>
                    <li><i class="fa fa-gear list-icon"></i>Mailchimp Integrated</li>
                </ul>
                <h4 class="mt40 mb20">Свяжитесь с нами</h4>
                <a href="/contact-us"><button type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right">Submit</button></a>
            </div> <!-- end col-md-6 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
    </div>
</div>

    @yield('content')

<!-- ==================================================
Footer: Classes
footer - Default footer
dark-footer - Dark footer [Use with .footer]
sticky-footer - Reveal footer on scroll
================================================== -->
@include('layouts.components.footer')
@include('layouts.components.scripts')


</body>

</html>
