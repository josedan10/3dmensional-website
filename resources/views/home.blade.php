<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="UTF-8">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- SEO --}}
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    @include('includes.meta-seo')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <meta http-equiv="cache-control" content="no-cache" />

    <!-- Styles -->
</head>
<body>

    <div id="loader" class="load-animation-container">
        <div class="loader-object">
          <img src="/images/svgs/3dmensional-logo.svg" alt="3dmensional logo brand svg" title="3dmensional logo brand svg">
          <div class="loader-glass"></div>
        </div>
    </div>

    <main>
        <div id="app" class="content">
            <nav-component></nav-component>
            <home-component></home-component>
            <services-component></services-component>
            <portfolio-component></portfolio-component>
            <about-component></about-component>
            <contacts-component></contacts-component>
        </div>
    </main>
</body>
</html>
