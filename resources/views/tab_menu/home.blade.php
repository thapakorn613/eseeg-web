@extends('layouts.app')

@section('content')
    <div class="site-wrap">
        <div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto order-lg-4 align-self-center">
                        <div class="site-section">
                            <div class="row align-items-stretch section-overlap">
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-1">
                                    <div class="banner-wrap bg-danger h-100">
                                        <a href="{{ action('DoctorController@showListEM') }}" class="h-100">
                                            <span ><img src="images/icon_emer.png" class="icon-search"></span>
                                            <h5>Emerge<br>200</h5>
                                            <p1 style="color:DodgerBlue;">
                                                Realtime ECG, Alert
                                            </p1>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-1">
                                    <div class="banner-wrap bg-warning h-100">
                                        <a href="{{ action('DoctorController@showListDoctor') }}" class="h-100">
                                            <span ><img src="images/icon_advice.png" class="icon-search"></span>
                                            <h5>Advice<br> 107</h5>
                                            <p1 style="color:DodgerBlue;">
                                                Advice , Send result
                                            </p1>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-1">
                                    <div class="banner-wrap  h-100">

                                        <a href="{{ action('DoctorController@showListPatient') }}" class="h-100">
                                            <span ><img src="images/icon_patient.png" class="icon-search"></span>
                                            <h5>Patient <br> 1907</h5>
                                            <p1 style="color:DodgerBlue;">
                                                Data log , Data patient
                                            </p1>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-1 text-center">
                                    <div class="banner-wrap bg-light  h-100 ">
                                        <a href="#" class="h-100">
                                            <span ><img src="images/icon_alert.png" class="icon-search"></span>
                                            <h4 style="color:DodgerBlue;">Schedule</h4>
                                            <h5 style="color:DodgerBlue;"><br></h5>

                                            <p1 style="color:DodgerBlue;">
                                                date
                                            </p1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
@endsection