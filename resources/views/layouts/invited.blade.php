<!DOCTYPE HTML>
<html>
<head>
    <title>Wichy’s’ car</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>

    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('images/logo/logo.ico') }}" sizes="16x16 24x24 36x36 48x48">

</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    @include('partials.invited.header')

    @include('partials.invited.navbar')

    @yield('content')

    @include('partials.invited.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
