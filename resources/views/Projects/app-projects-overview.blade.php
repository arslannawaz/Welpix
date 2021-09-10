@extends('layouts.master')
@section('title','Project Details')
@section('css')
<style>
  .circle div {
    position: absolute;
    top: 50%;
    left: 55%;
    margin: -20px 0 0 -86px;
    width: 100%;
    text-align: center;
    line-height: 40px;
    font-size: 10px;
  }
  .avatar-text{
    width:65px;
    font-size:12px;
     line-height:10px;
  }
</style>
@endsection
@section('content')
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
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <!-- Greetings Content Starts -->
                        <div class="col-xl-6 col-md-6 col-12 dashboard-greetings">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h5 class="greeting-text">Prgress</h5>
                                         <p>Project Progress</p>
                                    </div>
                                    <div class="progressbar" data-animate="false">
                                        <div class="circle" data-percent="50">
                                           <div></div>
                                        </div>
                                     </div>
                                </div>
                                <hr>
                                <div class="card-body mt-0">
                                    <div>
                                        <div class="avatar mr-1 avatar-lg ">
                                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder">
                                        </div>
                                        <p class="text-center avatar-text">Company Inc</p>
                                    </div>
                                    <br>
                                    <div class="d-inline-block">
                                        <div class="avatar mr-1 avatar-lg ">
                                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder">
                                        </div>
                                        <p class="text-center avatar-text">Martin</p>
                                    </div>
                                    <div class="d-inline-block">
                                        <div class="avatar mr-1 avatar-lg">
                                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder">
                                        </div>
                                        <p class="text-center avatar-text">Martine</p>
                                    </div>
                                    <hr>
                                    {{-- <div class="d-flex justify-content-between align-items-center ">
                                                    <div class="sales-item-name">
                                                        <p class="mb-0">iPhone</p>
                                                        <small class="text-muted">Smartphone</small>
                                                    </div>
                                                    <div class="sales-item-name">
                                                        <p class="mb-0">iPhone</p>
                                                        <small class="text-muted">Smartphone</small>
                                                    </div>
                                                </div> --}}
                                    <div class="d-flex mt-1 justify-content-between">
                                        <p class="line-height-1"><span class="h6 d-block font-weight-bold">Start Date</span>2021-02-29</p>
                                        <p class="line-height-1 mr-3"><span class="h6 d-block font-weight-bold">Due Date</span>---</p>
                                    </div>
                                    <div class="d-flex mt-1 justify-content-between">
                                        <p class="line-height-1"><span class="h6 d-block font-weight-bold">Services</span>Images,Vedeo</p>
                                        <p class="line-height-1 mr-2"><span class="h6 d-block font-weight-bold">Status</span>In Progress</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex mt-1 justify-content-between">
                                        <p class="line-height-1"><span class="h6 d-block font-weight-bold">Billing</span>2021-02-29</p>
                                        <p class="line-height-1 mr-3"><span class="h6 d-block font-weight-bold">Rate</span>$40.00</p>
                                    </div>
                                    <div class="d-flex mt-1 justify-content-between">
                                        <p class="line-height-1"><span class="h6 d-block font-weight-bold">Established hours</span>100 hrs</p>
                                        <p class="line-height-1 "><span class="h6 d-block font-weight-bold">Time spent</span>0 hrs : 0 mins</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Multi Radial Chart Starts -->
                        <div class="col-xl-6 col-md-6 col-12 dashboard-visit">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Visits of 2020</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-body">
                                    <div id="multi-radial-chart"></div>
                                    <ul class="list-inline text-center mt-1 mb-0">
                                        <li class="mr-2"><span class="bullet bullet-xs bullet-primary mr-50"></span>Target</li>
                                        <li class="mr-2"><span class="bullet bullet-xs bullet-danger mr-50"></span>Mart</li>
                                        <li><span class="bullet bullet-xs bullet-warning mr-50"></span>Ebay</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!-- Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/jkanban/jkanban.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<!-- Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/app-kanban.js') }}"></script>
{{-- Cicle Progress Bar --}}
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js'></script>
<script>
  $(document).ready(function ($) {
    function animateElements() {
      $('.progressbar').each(function () {
        var elementPos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        var percent = $(this).find('.circle').attr('data-percent');
        var percentage = parseInt(percent, 10) / parseInt(100, 10);
        var animate = $(this).data('animate');
        if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
          $(this).data('animate', true);
          $(this).find('.circle').circleProgress({
            startAngle: -Math.PI / 2,
            value: percent / 100,
            size: 80,
            thickness: 10,
            emptyFill: "rgba(0,0,0, .2)",
            fill: {
              color: 'green'
            }
          }).on('circle-animation-progress', function (event, progress, stepValue) {
            $(this).find('div').text((stepValue*100).toFixed(1) + "%");
          }).stop();
        }
      });
    }
    // Show animated elements
    animateElements();
    $(window).scroll(animateElements);
  }); //end document ready function
</script>
@endsection
