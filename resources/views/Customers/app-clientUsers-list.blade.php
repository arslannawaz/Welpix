@extends('layouts.master')
@section('title','Customer Users List')

@section('styles')
<!-- Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
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
            <!-- Customers list start -->
            <section class="users-list-wrapper">
            <a href="{{ url('/admin/client-user/add') }}" class="btn btn-primary float-right mt-1">Add New Client User</a> <br> <br> <br>

                <div class="users-list-filter px-1">
                    <form>
                        <div class="row border rounded py-2 mb-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">Verified</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-verified">
                                        <option value="">Any</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">Role</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-role">
                                        <option value="">Any</option>
                                        <option value="User">User</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">Status</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-status">
                                        <option value="">Any</option>
                                        <option value="Active">Active</option>
                                        <option value="Close">Close</option>
                                        <option value="Banned">Banned</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="users-list-table mt-3">
                    <div class="card">
                        <div class="card-body">
                            <!-- datatable start -->
                            <div class="table-responsive">
                                <table id="users-list-datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Last Seen</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>300</td>
                                            <td><a href="/html/ltr/vertical-menu-template/app-users-view.html">Martin</a>
                                            </td>
                                            <td>martin@gmail.com</td>
                                            <td>1 Week Ago</td>
                                            <td><span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <a href="/edit/clientUser"><i class="bx bx-edit-alt"></i></a>
                                                <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>301</td>
                                            <td><a href="/html/ltr/vertical-menu-template/app-users-view.html">Zeck</a>
                                            </td>
                                            <td>zeck@gmail.com</td>
                                            <td>1 Day Ago</td>
                                            <td><span class="badge badge-light-danger">Banned</span></td>
                                            <td>
                                                <a href="/edit/clientUser"><i class="bx bx-edit-alt"></i></a>
                                                <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>302</td>
                                            <td><a href="/edit/customer">Dena</a>
                                            </td>
                                            <td>dena@gmail.com</td>
                                            <td>1 Week Ago</td>
                                            <td><span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <a href="/edit/clientUser"><i class="bx bx-edit-alt"></i></a>
                                                <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- datatable ends -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Customers list ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('scripts')
<!-- Vendor JS-->
<script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
<!-- Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-users.js')}}"></script>
@endsection
