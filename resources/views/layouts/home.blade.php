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
@include('layouts.components.scripts.gtm-body')
@include('layouts.components.loader')
<!-- ========== HEADER ========== -->
@include('layouts.components.navbar')
@include('layouts.components.contact-modal')

<!-- ========== MAIN ========== -->

<!-- ========== HOME SECTION ========== -->
<div id="section1" class="parallax-window pt60" data-parallax="scroll"
     data-image-src="{{ $bannerImage->getImageUrl() ??  '/'.config('app.defaultBannerImage') }}" data-speed="0.6">
    <div style="background: rgba(0, 0, 0, 0.35);">
        <div class="container-fluid custom-container mt60">
            <div class="row mt60 pb80" style="margin-right: 0!important;">
                {!! $content->where('section', 'header')->first()->getText() !!}
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
@include('layouts.components.helpers')

</body>

</html>
