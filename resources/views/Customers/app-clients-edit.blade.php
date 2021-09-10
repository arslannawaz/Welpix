@extends('layouts.master')
@section('title','Edit Customer')

@section('styles')
<!-- Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<!-- Page CSS-->
<link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-users.css ')}}">
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
                        <h3>Add New Client</h3>
                        <hr>
                        <div class="">
                            <!-- users edit account form start -->
                            <form class="form-validate">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" placeholder="Company Name" name="company_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>E-mail</label>
                                                <input type="email" class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category" id="category">
                                                <option>Default</option>
                                                <option>Web Development</option>
                                                <option>Content Marketing</option>
                                                <option>Graphic Design</option>
                                                <option>App Development</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table mt-1">
                                                <thead>
                                                    <tr>
                                                        <th>Module Permission</th>
                                                        <th>Read</th>
                                                        <th>Write</th>
                                                        <th>Create</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Users</td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox1" class="checkbox-input" checked>
                                                                <label for="users-checkbox1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox2" class="checkbox-input"><label for="users-checkbox2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox3" class="checkbox-input"><label for="users-checkbox3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox4" class="checkbox-input" checked>
                                                                <label for="users-checkbox4"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Articles</td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox5" class="checkbox-input"><label for="users-checkbox5"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox6" class="checkbox-input" checked>
                                                                <label for="users-checkbox6"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox7" class="checkbox-input"><label for="users-checkbox7"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox8" class="checkbox-input" checked>
                                                                <label for="users-checkbox8"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Staff</td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox9" class="checkbox-input" checked>
                                                                <label for="users-checkbox9"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox10" class="checkbox-input" checked>
                                                                <label for="users-checkbox10"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox11" class="checkbox-input"><label for="users-checkbox11"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="checkbox"><input type="checkbox" id="users-checkbox12" class="checkbox-input"><label for="users-checkbox12"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                            changes</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
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
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/app-users.js')}}"></script>
<script src="{{ asset('app-assets/js/scripts/navs/navs.js')}}"></script>
@endsection
