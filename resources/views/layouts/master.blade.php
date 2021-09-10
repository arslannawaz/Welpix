<!DOCTYPE html>
<html lang="en">

<!-- BEGIN: Head-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Welpix">
    <meta name="keywords"
        content="admin template, welpix, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="robots" content="noindex" />
    <meta name="robots" content="nofollow" />

    <title>@yield('title')</title>
    @include('layouts.partials.styles')
    @yield('styles')

</head>

<!-- END: Head-->

@if (URL::current() == url('admin/estimate/demo'))

{{-- <body class="vertical-layout vertical-menu-modern content-left-sidebar chat-application navbar-sticky
 footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar"> --}}

<body
    class="vertical-layout vertical-menu-modern 2-columns content-left-sidebar chat-application file-manager-application navbar-sticky footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    @else

    <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="2-columns">

        @endif


        <!-- BEGIN: Header-->
        @include('layouts.partials.header')
        <!-- END: Header-->

        <!-- BEGIN: Main Menu-->
        @include('layouts.partials.main-menu')
        <!-- End: Main Menu-->


        <!-- BEGIN: Content-->
        @yield('content')
        <!-- END: Content-->

        <!-- widget chat demo start -->
        @include('layouts.partials.chat-demo-widget')
        <div class="drag-target"></div>


        <!-- BEGIN: Footer-->
        @include('layouts.partials.footer')
        <!-- END: Footer-->

        @include('layouts.partials.scripts')
        @yield('scripts')
    </body>

</html>
