<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <title>{{ $metaTagContent->getTitle() }}</title>

    <meta name="description" content="{{ $metaTagContent->getDescription() }}">
    <meta name="keywords" content="{{ $metaTagContent->getKeywords() }}">
    <meta property="og:title" content="{{ $metaTagContent->getOgTitle() }}">
    <meta property="og:description" content="{{ $metaTagContent->getOgDescription() }}">

    <link rel="shortcut icon" href="{{ asset('frontEnd') }}/images/favicon.ico">
    <link rel="apple-touch-icon" href="{{ asset('frontEnd') }}/images/apple-touch-icon.png">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/styles/vendor.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/styles/main.css">

    <script src="{{ asset('frontEnd') }}/scripts/vendor/modernizr.js"></script>
</head>