@extends('layouts.master')
@section('title','Intros Demo')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-file-manager.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-invoice.css') }}">
<link rel="stylesheet" type="text/css" href="{{ ('app-assets/css/pages/app-todo.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-kanban.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/jkanban/jkanban.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.snow.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-chat.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/swiper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/swiper.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
<style>
    .sidebar-left {
        display: none;
    }
</style>
@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-area-wrapper">
        <div class="sidebar-left  ">

            @include('estimate.partial.left-sidebar')

        </div>
        <div class="content-right w-100">
            @include('estimate.partial.right-sidebar')
        </div>

    </div>
</div>
<!-- END: Content-->
@endsection

@section('scripts')
<script src="{{asset('app-assets/js/scripts/navs/navs.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/app-file-manager.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script> --}}
<script src="{{ asset('app-assets/js/scripts/pages/app-invoice.js') }}"></script>
{{-- <script src="{{ asset('app-assets/js/scripts/pages/app-todo.js') }}"></script> --}}
<script src="{{asset ('app-assets/js/scripts/pages/app-kanban.js') }}"></script>
<script src="{{asset ('app-assets/vendors/js/jkanban/jkanban.min.js') }}"></script>
<script src="{{asset ('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
<script src="{{asset ('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{asset ('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/pages/app-chat.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/extensions/swiper.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.toggle-sidebar').click(function(){
            $('.sidebar-left').toggle('1000');
        })
    })
</script>
@endsection
