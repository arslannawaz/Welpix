@extends('layouts.master')
@section('title','Add Project')

@section('styles')
<!-- Page CSS-->
<link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/wizard.css">
@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <!-- Form wizard with step validation section start -->
            <section id="validation">
                <div class="row">
                    <div class="col-12">
                        <h4 class="card-title">Add New Project</h4>
                        <form action="#" class="wizard-validation">
                            <!-- Step 1 -->
                            <h6>
                                <i class="step-icon"></i>
                                <span>My Projects</span>
                            </h6>
                            <!-- Step 1 -->
                            <!-- body content of step 1 -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>

                            </fieldset>
                            <!-- body content of step 1 end -->
                            <!-- Step 2 -->
                            <h6>
                                <i class="step-icon"></i>
                                <span>Create Project</span>
                            </h6>
                            <!-- step 2 -->
                            <!-- body content of step 2 end -->
                            <fieldset>
                                <h3>Create new project</h3>
                                <p>Create new order to get an instant quote</p>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table table-responsive table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th>Icon</th>
                                                            <th>Service</th>
                                                            <th>Cat.</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Icon</td>
                                                            <td>Catalog images</td>
                                                            <td>Jewelry</td>
                                                            <td>24</td>
                                                            <td>€1.656,00</td>
                                                            <td>
                                                                <a href="edit/list"><i class="bx bx-edit-alt"></i></a>
                                                                <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Icon</td>
                                                            <td>Catalog images</td>
                                                            <td>Jewelry</td>
                                                            <td>24</td>
                                                            <td>€1.656,00</td>
                                                            <td>
                                                                <a href="edit/list"><i class="bx bx-edit-alt"></i></a>
                                                                <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Icon</td>
                                                            <td>Catalog images</td>
                                                            <td>Jewelry</td>
                                                            <td>24</td>
                                                            <td>€1.656,00</td>
                                                            <td>
                                                                <a href="edit/list"><i class="bx bx-edit-alt"></i></a>
                                                                <a href="/html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx text-danger bx-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3>Order Summary</h3>
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
                            </fieldset>
                            <!-- body content of step 2 end -->
                            <!-- Step 3 -->
                            <h6>
                                <i class="step-icon"></i>
                                <span>Add Items</span>
                            </h6>
                            <!-- step 3 end -->
                            <!-- step 3 content -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                Event Name
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3" name="eventName" placeholder="Enter Event Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus3">Event Statuss</label>
                                            <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Finished">Finished</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventLocation3">Event Location </label>
                                            <select class="custom-select form-control required" id="eventLocation3" name="eventStatus">
                                                <option value="Planning">New York</option>
                                                <option value="In Progress">Chicago</option>
                                                <option value="Finished">San Francisco</option>
                                                <option value="Finished">Boston</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="mr-2">Requirements :</label>
                                            <div class="c-inputs-stacked">
                                                <div class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                                                            <label for="checkbox6">Staffing</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="d-inline-block">
                                                    <fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox__input" id="checkbox5">
                                                            <label for="checkbox5">Catering</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- step 3 content end-->
                            <!-- Step 3 -->
                            <h6>
                                <i class="step-icon"></i>
                                <span>Check Out</span>
                            </h6>
                            <!-- step 3 end -->
                            <!-- step 3 content -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                Event Name
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3" name="eventName" placeholder="Enter Event Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus3">Event Statuss</label>
                                            <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Finished">Finished</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventLocation3">Event Location </label>
                                            <select class="custom-select form-control required" id="eventLocation3" name="eventStatus">
                                                <option value="Planning">New York</option>
                                                <option value="In Progress">Chicago</option>
                                                <option value="Finished">San Francisco</option>
                                                <option value="Finished">Boston</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="mr-2">Requirements :</label>
                                            <div class="c-inputs-stacked">
                                                <div class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                                                            <label for="checkbox6">Staffing</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="d-inline-block">
                                                    <fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox__input" id="checkbox5">
                                                            <label for="checkbox5">Catering</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- step 3 content end-->
                        </form>


                    </div>
                </div>
            </section>
            <!-- Form wizard with step validation section end -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('scripts')

<!-- Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- Page JS-->
<script src="{{asset('app-assets/js/scripts/forms/wizard-steps.js')}}"></script>
@endsection
