@extends('layouts.master')
@section('title','Add Team Members')

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
                        <h3>Add New Member</h3>
                        <hr>
                        <div class="">
                            <!-- users edit account form start -->
                            <form class="form-validate">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Team</label>
                                            <select class="form-control">
                                                <option>Team 1</option>
                                                <option>Team 2</option>
                                                <option>Team 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Member</label>
                                            <select class="form-control">
                                                <option>Member 1</option>
                                                <option>Member 2</option>
                                                <option>Member 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit account form ends -->

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
