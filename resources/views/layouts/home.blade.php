<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <title>Salt | Landing | Multipurpose Responsive HTML Site Template</title>

    <meta name="description" content="Salt - Responsive Multipurpose HTML5 Template ">
    <meta name="keywords" content="business, responsive, multi-purpose">
    <meta name="author" content="ThemesEase">

    <link rel="shortcut icon" href="{{ asset('frontEnd') }}/images/favicon.ico">
    <link rel="apple-touch-icon" href="{{ asset('frontEnd') }}/images/apple-touch-icon.png">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/styles/vendor.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/styles/main.css">

    <script src="{{ asset('frontEnd') }}/scripts/vendor/modernizr.js"></script>
</head>

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

<!-- ========== MAIN ========== -->

<!-- ========== HOME SECTION ========== -->
<div id="section1" class="parallax-window pt60" data-parallax="scroll" data-image-src="{{ asset('frontEnd') }}/images/demo-img-2.jpg" data-speed="0.6">
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
                <h4 class="mt40 mb20">Register for a free demo!</h4>
                <div class="col-md-9 col-sm-8">
                    <input type="email" class="form-control input-style-2" id="email" placeholder="Enter Your Email Address..." required="">
                </div>
                <button type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right pull-right">Submit</button>
            </div> <!-- end col-md-6 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</div>

<section class="content-section">
    @yield('content')
</section>

<!-- ==================================================
Footer: Classes
footer - Default footer
dark-footer - Dark footer [Use with .footer]
sticky-footer - Reveal footer on scroll
================================================== -->
@include('layouts.components.footer')


<script src="{{ asset('frontEnd') }}/scripts/vendor.js"></script>
<script src="{{ asset('frontEnd') }}/scripts/plugins.js"></script>
<script src="{{ asset('frontEnd') }}/scripts/main.js"></script>


</body>

</html>
