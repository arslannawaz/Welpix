@extends('layouts.master')
@section('title','Project Milestones')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-1">
                        <h3>Order #1 - Test Project 1</h3>
                    </div>
                </div>
                @include('projects.project-details-nav')
                <div class="row jumbotron bg-white">
                    <table class="table text-center table-borderless mt-n2">
                        <thead>
                            <tr>
                                <td> <b>Name</b></td>
                                <td><b>All Tasks</b></td>
                                <td><b>Pending Tasks</b></td>
                                <td><b>Completed Tasks</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3D Design</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Rendering</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Editing</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('scripts')
<!-- Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/jkanban/jkanban.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-kanban.js')}}"></script>
@endsection
