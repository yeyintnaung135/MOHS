@extends('layouts.layout')
@section('content')


    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite Hospital</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
    @include('layouts.header')
    <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
    @include('layouts.sidebar')
    <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    {{--<div class="col-md-5 align-self-center">--}}
                    {{--<h4 class="text-themecolor">Basic Form</h4>--}}
                    {{--</div>--}}
                    <div class="col-md-12 align-self-center text-right">
                        <div class="d-flex justify-content-start align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Basic Form</li>
                            </ol>
                            {{--<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i--}}
                            {{--class="fa fa-plus-circle"></i> Create New--}}
                            {{--</button>--}}
                        </div>
                    </div>
                </div>












                    {{--First form--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Type Two Patient Register form</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Body Temperature</label>
                                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Body Temperature">

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Pulse rate </label>
                                                    <input type="text" name="age" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Pulse rate">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Respiration rate</label>
                                                    <input type="text" name="age" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Respiration rate">
                                                </div>

                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Systolic blood pressure</label>
                                                    <input type="text" name="duration_of_dm" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Systolic blood pressure">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Diastolic blood pressure
                                                    </label>
                                                    <input type="text" name="town" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Diastolic blood pressure">
                                                </div>
                                            </div>                                            <!--/span-->


                                            <!--/span-->
                                        </div>










                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--First form--}}

                    {{--First form--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Initial Clinical presentation</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">DKA</label>
                                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Initial Clinical presentation">

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Hyperglycemia
                                                    </label>
                                                    <input type="text" name="age" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Hyperglycemia">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Polyuria </label>
                                                    <input type="text" name="age" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Polyuria">
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Polydipsia
                                                    </label>
                                                    <input type="text" name="duration_of_dm" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Polydipsia">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Weight loss

                                                    </label>
                                                    <input type="text" name="town" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Weight loss">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Insulin regime</label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Insulin regime">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Initial HbA1c
                                                    </label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Initial HbA1c">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Initial RBS
                                                    </label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Initial RBS">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">1st admission </label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="1st admission">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Hospital name</label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Hospital name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Reason for Admission
                                                    </label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Reason for Admission">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Remark</label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Remark">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Date of transfer to transitional Clinic
                                                    </label>
                                                    <input type="text" name="year_of_dx"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Date of transfer">
                                                </div>
                                            </div>


                                            <!--/span-->
                                        </div>










                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--First form--}}






                    {{--Six form--}}
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="offset-sm-4 offset-md-9 col-md-9">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-lg btn-success"> <i class="fa fa-check"></i> Submit</button>
                                        <button type="button" class="btn waves-effect waves-light btn-lg btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Fifth form--}}









                {{--<div class="right-sidebar">--}}
                {{--<div class="slimscrollright">--}}
                {{--<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>--}}
                {{--</div>--}}
                {{--<div class="r-panel-body">--}}
                {{--<ul id="themecolors" class="m-t-20">--}}
                {{--<li><b>With Light sidebar</b></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-megna"--}}
                {{--class="megna-theme working">6</a></li>--}}
                {{--<li class="d-block m-t-30"><b>With Dark sidebar</b></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-default-dark"--}}
                {{--class="default-dark-theme ">7</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-green-dark"--}}
                {{--class="green-dark-theme">8</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-blue-dark"--}}
                {{--class="blue-dark-theme">10</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="m-t-20 chatonline">--}}
                {{--<li><b>Chat option</b></li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Varun Dhavan <small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Genelia Deshmukh <small--}}
                {{--class="text-warning">Away</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Ritesh Deshmukh <small--}}
                {{--class="text-danger">Busy</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Arijit Sinh <small--}}
                {{--class="text-muted">Offline</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Govinda Star <small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>John Abraham<small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Hritik Roshan<small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Pwandeep rajan <small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}




            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © Copyright ©All rights reserved
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>


@endsection