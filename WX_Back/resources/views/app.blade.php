<!DOCTYPE html>
<html lang="{{ app()->getLocale() || 'en' }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title') </title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    @include('layouts._stylesheets')
    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('layouts._nav')
    @include('layouts._aside')

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->

    @include('layouts._footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts._scripts')

</body>

</html>
