@extends('layouts.master')
@section('title','Add Role')

@section('styles')
<!-- Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/validation/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<!-- Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-users.css')}}">
@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users add start -->
            <section class="users-add">
                <div class="card">
                    <div class="card-body">
                        <h3>Add New Role</h3>
                        <hr>
                        <div class="">
                            <form class="form-validate">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title" name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <button class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
            <!-- users add ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('scripts')
<!--  Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-users.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/navs/navs.js')}}"></script>
@endsection
