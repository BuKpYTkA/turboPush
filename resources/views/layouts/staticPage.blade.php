<?php
/**
 * @var $metaTagContent \App\Models\MetaTag\MetaTag
 * @var $bannerImage \App\Models\BannerImage\BannerImage
 */
?>

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
@include('layouts.components.loader')

<!-- ========== LOADER ========== -->
@include('layouts.components.navbar')
<!-- ========== MAIN ========== -->
<!-- ========== HOME SECTION ========== -->
<!-- ========== ANIMATED PAGE TITLE ========== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="{{ $bannerImage->getImageUrl() }}" data-speed="0.6" style="padding-bottom: 40px; width: 100%; background-color: rgba(0,0,0,0.55)">
    <div class="container">
        <div class="row page-title-row text-center" style="padding-bottom: 40px!important; margin-top: 80px!important;">
            <div class="col-md-12">
                <h1 style="word-break: break-word" class="page-title header-page-title"><b>{{ $metaTagContent->getH1() }}</b></h1>
            </div> <!-- end col-md-6 -->
        </div> <!-- end page-title-row -->
        <div class="container text-center">
            <a href="#contact-us" class="contact-modal"><button type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right">Оставить заявку</button></a>
        </div>
    </div> <!-- end container -->
</section>

    @yield('content')


<!-- ==================================================
Footer: Classes
footer - Default footer
dark-footer - Dark footer [Use with .footer]
sticky-footer - Reveal footer on scroll
================================================== -->

@include('layouts.components.footer')
@include('layouts.components.helpers')
@include('layouts.components.scripts')


</body>

</html>
