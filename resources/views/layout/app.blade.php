<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EU In Kenya</title>
    @include('partials.assets')
    @yield('assets')
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
@include('partials.preloader')
<!-- /PRELOADER -->

<!-- WRAPPER -->
@yield('content')
<!-- /WRAPPER -->

@include('partials.scripts')

</body>
</html>
