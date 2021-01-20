@extends('layouts.layout')
@section('content')

<body class="skin-megna fixed-layout">
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
                        <img src="{{asset('images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{asset('images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <span class="hidden-xs"><span class="font-bold">elite</span>hospital</span>
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
                                                <h5>Luanch Admin</h5> <span
                                                        class="mail-desc">Just see the my new admin!</span> <span
                                                        class="time">9:30 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
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
                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all
                                            notifications</strong> <i class="fa fa-angle-right"></i> </a>
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
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
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
                                            <div class="user-img"><img src="{{asset('images/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                            <img src="{{asset('images/users/2.jpg')}}" alt="user"
                                                                       class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span
                                                        class="mail-desc">I've sung a song! See you at</span> <span
                                                        class="time">9:10 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"><img src="{{asset('images/users/3.jpg')}}"
                                                                       alt="user" class="img-circle"> <span
                                                        class="profile-status away pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span
                                                        class="time">9:08 AM</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"><img src="{{asset('images/users/4.jpg')}}"
                                                                       alt="user" class="img-circle"> <span
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
                                class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
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
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                           data-slide="prev"> <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span> <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                           data-slide="next"> <span class="carousel-control-next-icon"
                                                                    aria-hidden="true"></span> <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class="col-lg-3 m-b-30">
                                    <h4 class="m-b-20">ACCORDION</h4>
                                    <div class="accordion" id="accordionExample">
                                        <div class="card m-b-0">
                                            <div class="card-header bg-white p-0" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                 data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-0">
                                            <div class="card-header bg-white p-0" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                            data-toggle="collapse" data-target="#collapseTwo"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                 data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-0">
                                            <div class="card-header bg-white p-0" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                            data-toggle="collapse" data-target="#collapseThree"
                                                            aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                 data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
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
                                            <input type="email" class="form-control" placeholder="Enter email"></div>
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
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You
                                                can give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give
                                                link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                Another Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth
                                                link</a></li>
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
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/users/1.jpg')}}" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
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
                    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
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
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                class="fa fa-plus-circle"></i> Create New
                    </button>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">370</h3>
                                <h5 class="text-muted m-b-0">New Patient</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">342</h3>
                                <h5 class="text-muted m-b-0">OPD Patient</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">13</h3>
                                <h5 class="text-muted m-b-0">Today's Ops.</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0">$34650</h3>
                                <h5 class="text-muted m-b-0">Hospital Earning</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <small class="float-right text-success"><i class="fa fa-sort-asc"></i> 18% High then last
                                month
                            </small>
                            New Patient
                        </h5>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                    </div>
                    <div id="sparkline8" class="minus-mar"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <small class="float-right text-danger"><i class="fa fa-sort-desc"></i> 18% less then last
                                month
                            </small>
                            OPD Patients
                        </h5>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                    </div>
                    <div id="sparkline9" class="minus-mar"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <small class="float-right text-success"><i class="fa fa-sort-asc"></i> 18% High then last
                                month
                            </small>
                            Treatment
                        </h5>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                    </div>
                    <div id="sparkline10" class="minus-mar"></div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!--row -->
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Patients In</h5>
                        <ul class="list-inline text-center">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>OPD</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>ICU</h5>
                            </li>
                        </ul>
                        <div id="morris-area-chart1" style="height: 370px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hospital Earning</h5>
                        <ul class="list-inline text-center">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>OPD</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>ICU</h5>
                            </li>
                        </ul>
                        <div id="morris-area-chart2" style="height: 370px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- /row -->
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">New Patient List</h5>
                        <p class="text-muted">this is the sample data here for crm</p>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Diseases</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Deshmukh</td>
                                    <td>Prohaska</td>
                                    <td>@Genelia</td>
                                    <td><span class="label label-danger">Fever</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deshmukh</td>
                                    <td>Gaylord</td>
                                    <td>@Ritesh</td>
                                    <td><span class="label label-info">Cancer</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sanghani</td>
                                    <td>Gusikowski</td>
                                    <td>@Govinda</td>
                                    <td><span class="label label-warning">Lakva</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                    <td><span class="label label-success">Dental</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Joshi</td>
                                    <td>Hickle</td>
                                    <td>@Maruti</td>
                                    <td><span class="label label-info">Cancer</span></td>
                                </tr>
                                <tr>
                                    <td class="pb-0">6</td>
                                    <td class="pb-0">Nigam</td>
                                    <td class="pb-0">Eichmann</td>
                                    <td class="pb-0">@Sonu</td>
                                    <td class="pb-0"><span class="label label-success">Dental</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Laboratory Test</h5>
                        <p class="text-muted">this is the sample data here for crm</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>ECG</th>
                                    <th>Result</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Genelia Deshmukh</td>
                                    <td><span class="peity-line" data-width="120"
                                              data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}'
                                              data-height="40">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span></td>
                                    <td><span class="text-danger text-semibold"><i class="fa fa-level-down"
                                                                                   aria-hidden="true"></i> 28.76%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ajay Devgan</td>
                                    <td><span class="peity-line" data-width="120"
                                              data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}'
                                              data-height="40">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span></td>
                                    <td><span class="text-warning text-semibold"><i class="fa fa-level-down"
                                                                                    aria-hidden="true"></i> 8.55%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Hrithik Roshan</td>
                                    <td><span class="peity-line" data-width="120"
                                              data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}'
                                              data-height="40">0,3,6,1,2,4,6,3,2,1</span></td>
                                    <td><span class="text-success text-semibold"><i class="fa fa-level-up"
                                                                                    aria-hidden="true"></i> 58.56%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Steve Gection</td>
                                    <td><span class="peity-line" data-width="120"
                                              data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}'
                                              data-height="40">0,3,6,4,5,4,7,3,4,2</span></td>
                                    <td><span class="text-info text-semibold"><i class="fa fa-level-up"
                                                                                 aria-hidden="true"></i> 35.76%</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span></div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme working">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/1.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                            class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/2.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                            class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/3.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                            class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/4.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                            class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/5.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>Govinda Star <small
                                            class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/6.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>John Abraham<small
                                            class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/7.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                            class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('images/users/8.jpg')}}"
                                                              alt="user-img" class="img-circle"> <span>Pwandeep rajan <small
                                            class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
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
    © 2020 Eliteadmin by themedesigner.in
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
@endsection
