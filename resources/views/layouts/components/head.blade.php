<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <title>{{ $metaTagContent->getTitle() }}</title>

    <meta name="description" content="{{ $metaTagContent->getDescription() }}">
    <meta name="keywords" content="{{ $metaTagContent->getKeywords() }}">
    <meta property="og:title" content="{{ $metaTagContent->getOgTitle() }}">
    <meta property="og:description" content="{{ $metaTagContent->getOgDescription() }}">
    <meta property="og:image" content="{{ $bannerImage->getImageUrl() }}">

    <link rel="shortcut icon" href="{{ asset('images') }}/favicon.ico">
    <link rel="apple-touch-icon" href="{{ asset('images') }}/favicon.ico">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/styles/vendor.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/styles/main.css">
    <link rel="stylesheet" href="{{ asset('css') }}/components.css">

    <script src="{{ asset('frontEnd') }}/scripts/vendor/modernizr.js"></script>
    @include('layouts.components.scripts.gtm-head')
</head>
