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
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('images/logo-icon.png')}}" alt="homepage" class="dark-logo"/>
                            <!-- Light Logo icon -->
                            <img src="{{asset('images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">Test</span>hospital</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <li class="nav-item"><a
                                    class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="icon-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span>
                                                    <span class="time">9:30 AM</span></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span>
                                                    <span class="time">9:08 AM</span></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span
                                                            class="mail-desc">Just see the my admin!</span> <span
                                                            class="time">9:02 AM</span></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check
                                                all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                        class="icon-note"></i>
                                <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown"
                                 aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"><img src="../assets/images/users/1.jpg" alt="user"
                                                                           class="img-circle"> <span
                                                            class="profile-status online pull-right"></span></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span
                                                            class="mail-desc">Just see the my admin!</span> <span
                                                            class="time">9:30 AM</span></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"><img src="../assets/images/users/2.jpg" alt="user"
                                                                           class="img-circle"> <span
                                                            class="profile-status busy pull-right"></span></div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span>
                                                    <span class="time">9:10 AM</span></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"><img src="../assets/images/users/3.jpg" alt="user"
                                                                           class="img-circle"> <span
                                                            class="profile-status away pull-right"></span></div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span></div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"><img src="../assets/images/users/4.jpg" alt="user"
                                                                           class="img-circle"> <span
                                                            class="profile-status offline pull-right"></span></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span
                                                            class="mail-desc">Just see the my admin!</span> <span
                                                            class="time">9:02 AM</span></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all
                                                e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"><a
                                    class="nav-link dropdown-toggle waves-effect waves-dark" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti-layout-width-default"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"><img class="d-block img-fluid"
                                                                                src="../assets/images/big/img1.jpg"
                                                                                alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                                                src="../assets/images/big/img2.jpg"
                                                                                alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                                                src="../assets/images/big/img3.jpg"
                                                                                alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                               role="button" data-slide="prev"> <span class="carousel-control-prev-icon"
                                                                                      aria-hidden="true"></span> <span
                                                        class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                               role="button" data-slide="next"> <span class="carousel-control-next-icon"
                                                                                      aria-hidden="true"></span> <span
                                                        class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist"
                                             aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapseOne" aria-expanded="true"
                                                           aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel"
                                                     aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseTwo"
                                                           aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel"
                                                     aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseThree"
                                                           aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel"
                                                     aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                       placeholder="Enter Name"></div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                          placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="../assets/images/users/1.jpg" alt="user" class=""> <span
                                        class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My
                                    Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                                    Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"><a class="nav-link  waves-effect waves-light"
                                                                  href="javascript:void(0)"><i class="ti-settings"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
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









<form>

                {{--First form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="#">
                                <div class="card-body">
                                    <h4 class="card-title">Type Two Patient Register form</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share
                                                        your email
                                                        with anyone else.
                                                    </small>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Age</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Gender</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio11"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio11">Male</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio12"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio12">Female</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Duration of D/M/Y</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Address(Town)</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Year of Dx</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Phone No</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Family H/O</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio13"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio13">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio14"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio14">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>






                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  {{--First form--}}





                {{--SEC form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="#">
                                <div class="card-body">
                                    <h4 class="card-title">Medical Problem</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Hypertension</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Enter email">

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Dyslipidaemia</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Dyslipidaemia">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">DMI</label>
                                                    <div class="row no-gutters">
                                                    <div class="col-3 mr-2">
                                                        <input type="password" class="form-control"
                                                                               id="exampleInputPassword1"
                                                                               placeholder="Weight">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="password" class="form-control"
                                                               id="exampleInputPassword1"
                                                               placeholder="Height">
                                                    </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Tuberculosis</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Stroke</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">IHD/MI</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nephropathy</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                               <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Neuropathy</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">DM foot</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Others</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Surgical History</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio16"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio16">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio17"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio17">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>







                                    </div>
                                    <hr>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--SEC form--}}






                {{--third form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="#">
                                <div class="card-body">
                                    <h4 class="card-title">Infection</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">




                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">HBV</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio19"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio19">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio20"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio20">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">HCV</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio211"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio211">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio222"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio222">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">RVI</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio23"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio23">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio24"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio24">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <!--/span-->

                                            <!--/span-->
                                        </div>







                                    </div>
                                    <hr>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--third form--}}




                {{--Four form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Habitual History</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">




                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Smoking</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio191"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio191">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio201"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio201">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Alcohol</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio2111"
                                                                       name="customRadio2111" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio2111">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio2222"
                                                                       name="customRadio2222" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2222">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Betal Chewing</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio231"
                                                                       name="customRadio231" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio231">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio241"
                                                                       name="customRadio241" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio241">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <!--/span-->

                                            <!--/span-->
                                        </div>







                                    </div>
                                    <hr>
                                </div>
                        </div>
                    </div>
                </div>
                {{--Four form--}}






                {{--Fifth form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="#">
                                <div class="card-body">
                                    <h4 class="card-title">Drug History</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">OAD</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Enter email">

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Insulin</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Dyslipidaemia">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Traditional</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Native</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Anti H/T</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Anti Lipid</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Other</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Password">
                                                </div>
                                            </div>                                            <!--/span-->
                                                                                   <!--/span-->

                                            <!--/span-->
                                        </div>











                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--Fifth form--}}






                {{--Six form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="#">

                                <hr>
                                <div class="form-body">
                                    <div class="card-body">



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Dental Problem</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio16"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio16">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio17"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio17">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Diet Control</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio16"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio16">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio17"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio17">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Physical Activity</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio16"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio16">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio17"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio17">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Steroid Use</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio16"
                                                                       name="customRadio" class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio16">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio17"
                                                                       name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio17">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>







                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--Fifth form--}}

</form>







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