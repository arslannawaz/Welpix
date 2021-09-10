@extends('layouts.master')
@section('title','Categories')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="breadcrumbs-top">
                    <h5 class="content-header-title float-left pr-1 mb-0">Categories</h5>
                    <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                            <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">categories
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Table head options start -->
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Categories</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('admin/category/add') }}" class="btn btn-primary float-right">Add New Category</a>
                        </div>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">Jewlery</td>
                                        <td>
                                            <a href="/edit/category"><i class="bx bx-edit-alt"></i></a>
                                            <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">Cosmetics</td>
                                        <td>
                                            <a href="/edit/category/edit"><i class="bx bx-edit-alt"></i></a>
                                            <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Table head options end -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
