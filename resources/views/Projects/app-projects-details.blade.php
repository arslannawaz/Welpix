@extends('layouts.master')
@section('title','Project Details')
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
                    <h3 class="mt-n3">Order Summary</h3>
                    <div class="col-12 mb-1 mt-1">
                        <div class="media">
                            <div class="media-body">
                                <p class="float-right"><b>$870</b></p>
                                <h6 class="mt-0"><b>Catalog : Jewlary</b></h6>
                                <p class="mt-1">5 products x 3 angles : 24 images x 49$ with 3d modeling at 380$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-1">
                        <div class="media">
                            <div class="media-body">
                                <p class="float-right"><b>$870</b></p>
                                <h6 class="mt-0"><b> Hero : Jewlary</b></h6>
                                <p class="mt-1">5 products x 3 angles : 24 images x 49$ with 3d modeling at 380$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-1">
                        <div class="media">
                            <div class="media-body">
                                <p class="float-right"><b>$870</b></p>
                                <h6 class="mt-0"><b> Video : Jewlary</b></h6>
                                <p class="mt-1">5 products x 3 angles : 24 images x 49$ with 3d modeling at 380$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('scripts')
<!-- Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/jkanban/jkanban.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<!-- Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/app-kanban.js') }}"></script>
@endsection
