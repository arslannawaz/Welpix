@extends('layouts.master')
@section('title','Projects')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="breadcrumbs-top">
                    <h5 class="content-header-title float-left pr-1 mb-0">Projects</h5>
                    <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                            <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">projects</li>
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
                            <h4 class="card-title">Projects</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('admin/project/add') }}" class="btn btn-primary float-right"> Add New Project</a>
                        </div>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Client</th>
                                        <th>Due Date</th>
                                        <th>Progress</th>
                                        <th>Team</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td> <a href="{{ url('admin/project/overview') }}">Test Project 1</a></td>
                                        <td>Martin</td>
                                        <td>25-08-12</td>
                                        <td>
                                            <div class="progress progress-bar-primary">
                                                <div class="progress-bar" style="width:50%"></div>
                                            </div>
                                        </td>
                                        <td>Austin,Jack</td>

                                        <td>Not Started</td>
                                        <td>
                                            <a href="{{ url('admin/edit/project')}}"><i class="bx bx-edit-alt"></i></a>
                                            <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td> <a href="{{ url('admin/project/details') }}">Test Project 2</a></td>
                                        <td>Paul</td>
                                        <td>25-08-12</td>
                                        <td>
                                            <div class="progress progress-bar-primary">
                                                <div class="progress-bar" style="width:80%"></div>
                                            </div>
                                        </td>
                                        <td>Austin,Jack</td>

                                        <td>Not Started</td>
                                        <td>
                                            <a href="{{ url('/admin/edit/project')}}"><i class="bx bx-edit-alt"></i></a>
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
