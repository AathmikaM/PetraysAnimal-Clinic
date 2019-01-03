<link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/style1.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="index">
                <b>
                    <img src="{{ URL::asset('assets/images/logo1.png') }}" alt="homepage" class="dark-logo" width="200" />
                </b>
                <span>
                        </span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0 ">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item hidden-sm-down">
                    <div class="dropdown-menu mailbox animated bounceInDown"></div>

                    <!--<form class="app-search p-l-20">
                        <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                    </form>-->

                    <form class="app-search p-l-20">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                    </form>
                </li>
            </ul>
            <!--<ul class="navbar-nav my-lg-0">
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://mycs.net.au/wp-content/uploads/2016/03/person-icon-flat.png" alt="user" class="profile-pic m-r-5" />Nigg</a>
                     </li>
                 </ul> -->
            <ul class="navbar-nav my-lg-0">

                <li class="drop" id="notify">
                    <a class="pad-non">
                        @if (count(Auth()->user()->notifications)==0)
                            <i class="mdl-badge material-icons dark">notifications</i>
                        @else
                            <i class="mdl-badge material-icons dark"
                               data-badge="{{count(Auth()->user()->unreadNotifications)}}">notifications</i>
                        @endif
                    </a>
                    <ul class="z-1 left-ul z-depth-2 dropdown-content" id="scroll">
                        <li>
                            @if (count(Auth()->user()->notifications)==0)
                                <a href="#">
                                    <h6>
                                        <center> Appointment Request</center>
                                    </h6>
                                </a>
                            @endif
                        </li>
                        @foreach(Auth()->User()->notifications as $notification)
                            <li style="border: 0.5px solid lightblue;padding: 5px">
                                @if ($notification->type == 'App\Notifications\RepliedToThread')
                                    <a class="" href="{{ url('/Appointments') }}">
                                        @include('layouts.partials.notification.'.snake_case(class_basename($notification->type)))
                                        @if ($notification->read_at == null)
                                            <p>
                                                <b>{{$notification->data['message']}}</b><br>{{$notification->updated_at}}
                                            </p><p class="thin right-align grey-text"></p>
                                        @else
                                            <p>{{$notification->data['message']}} <br> {{$notification->updated_at}}</p>
                                            <p class="thin right-align grey-text"></p>
                                        @endif
                                    </a>
                                @elseif($notification->type == 'App\Notifications\RepliedToThreadMy')
                                    <a class="" href="{{ url('/Appointments') }}">
                                        @include('layouts.partials.notification.'.snake_case(class_basename($notification->type)))
                                        @if ($notification->read_at == null)
                                            <p>
                                                <b>{{$notification->data['message']}}</b><br>{{$notification->updated_at}}
                                            </p><p class="thin right-align grey-text"></p>
                                        @else
                                            <p>{{$notification->data['message']}} <br> {{$notification->updated_at}}</p>
                                            <p class="thin right-align grey-text"></p>
                                        @endif
                                    </a>
                                @else
                                    <a class="" href="{{ url('/Appointments') }}">
                                        @include('layouts.partials.notification.'.snake_case(class_basename($notification->type)))
                                        @if ($notification->read_at == null)
                                            <p>
                                                <b>{{$notification->data['message']}}</b><br>{{$notification->updated_at}}
                                            </p><p class="thin right-align grey-text"></p>
                                        @else
                                            <p>{{$notification->data['message']}} <br> {{$notification->updated_at}}</p>
                                            <p class="thin right-align grey-text"></p>
                                        @endif
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://mycs.net.au/wp-content/uploads/2016/03/person-icon-flat.png" alt="user" class="profile-pic">&nbsp;{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">

                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="http://mycs.net.au/wp-content/uploads/2016/03/person-icon-flat.png" alt="user"></div>
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="settings"><i class="ti-settings"></i> Account Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/abc"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>

                    </div>
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
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li>
                    <a href="/index" class="waves-effect"><i class="fa fa-bars m-r-10" aria-hidden="true"></i>Dashboard</a>
                </li>

                <li>
                    <a href="/petowners" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>MyClients</a>
                </li>


                <li class="nav-item dropdown">

                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list m-r-10" aria-hidden="true"></i>Analyse</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a class="dropdown-item" href="/incomeAnalysis">&nbsp;&nbsp;Income</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/clientbase">&nbsp;&nbsp;Clientbase</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/diseases">&nbsp;&nbsp;Diseases</a>
                    </li>
                </ul>

<!--                     <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-chart-line"></i>
                        <span>Analyse</span></a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="/incomeAnalysis">Income</a>
                        <a class="dropdown-item" href="/Analyse/clientbase">Clientbase</a>
                        <a class="dropdown-item" href="/updatestock">Diseases</a>
                        <div class="dropdown-divider"></div>
                    </div>
                    </a> -->

                </li>


                <li>
                    <a href="Appointments" class="waves-effect"><i class="fa fa-calendar m-r-10" aria-hidden="true"></i>Appointments</a>
                </li>


                <li class="nav-item dropdown">
 
            
                <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-shopping-cart m-r-10" aria-hidden="true"></i>Stock Management</a>

                <ul class="collapse list-unstyled" id="pageSubmenu1">
                    <li>
                        <a class="dropdown-item" href="/addstock">&nbsp;&nbsp;Add Stock</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/viewstock">&nbsp;&nbsp;View Stock</a>
                    </li>
                    
                </ul>
                </li>




            </ul>


        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<style>

    .drop {
        margin-left: 450px;
        margin-top: 20px;
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        margin-left: -200px;
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

        z-index: 1;
    }

    .drop:hover .dropdown-content {
        display: block;
    }

    /*! CSS Used from: http://127.0.0.1:8000/css/materialize.css */
    .grey-text{color:#9e9e9e!important;}
    body{margin:0;}
    a{background-color:transparent;}
    a:active,a:hover{outline:0;}
    b{font-weight:bold;}
    *,*:before,*:after{box-sizing:inherit;}
    ul:not(.browser-default){padding-left:0;list-style-type:none;}
    ul:not(.browser-default) li{list-style-type:none;}
    a{color:#039be5;text-decoration:none;-webkit-tap-highlight-color:transparent;}
    .z-depth-2{box-shadow:0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);}
    i{line-height:inherit;}
    .right-align{text-align:right;}
    .right{float:right!important;}
    .material-icons{text-rendering:optimizeLegibility;font-feature-settings:'liga';}
    .container{margin:0 auto;max-width:1280px;width:90%;}
    @media only screen and (min-width: 601px){
        .container{width:85%;}
    }
    @media only screen and (min-width: 993px){
        .container{width:70%;}
    }
    a{text-decoration:none;}
    .thin{font-weight:200;}
    ::-webkit-input-placeholder{color:#d1d1d1;}
    :-moz-placeholder{color:#d1d1d1;}
    ::-moz-placeholder{color:#d1d1d1;}
    :-ms-input-placeholder{color:#d1d1d1;}
    /*! CSS Used from: http://127.0.0.1:8000/css/style1.css */
    body{background-color:#f0f0f0;font-family:'Montserrat', sans-serif;}
    body .pad-non{padding:0px!important;}
    body .z-1{z-index:1!important;}
    body a{cursor:pointer!important;}
    body a:hover{color:#91e7cd!important;}
    body .mdl-badge{margin:0 20px;}
    body .material-icons.mdl-badge[data-badge]::after{font-size:0.4em;width:2em;height:2em;}
    body .material-icons.mdl-badge[data-badge]::after{top:1.2em;right:-0.8em;border:1px solid #ffffff;background-color:#91e7cd;}
    body .container .drop{position:relative;line-height:64px;color:#000000;cursor:pointer;}
    body .container .drop i.material-icons{color:#818181;}
    body .container .drop ul{width:200px;margin-left:15px;position:absolute;transition:all 0.3s ease;transform:scale(0);transform-origin:0 0;}
    body .container .drop ul.left-ul{right:0;}
    body .container .drop ul li{line-height:40px;display:block;width:100%;background-color:#ffffff!important;}
    body .container .drop ul li a{width:100%;padding:0 10px;display:inline-block;box-sizing:border-box;}
    body .container .drop ul li:hover a{color:#ffffff!important;background-color:#91e7cd!important;margin-left:0px;}
    body .container .drop:hover ul{transform:scale(1);}
    body .container .drop:hover{color:#91e7cd!important;}
    @media only screen and (max-width: 600px){
        body .container .drop ul.left-ul{right:-85px;}
    }
    @media only screen and (max-width: 370px){
        body .container .drop ul.left-ul{width:100%;}
    }
    @media only screen and (max-width: 400px){
        body .container .drop ul.left-ul{right:-85px;}
    }
    body .container{width:90%;}
    body a:after{right:110px;}
    @media only screen and (min-width: 601px){
        body .container{width:90%;}
        body a:after{right:110px;}
    }
    @media only screen and (max-width: 992px){
        body .container .drop ul{margin-left:-140px;margin-top:-15px;}
        body .container{width:100%;}
        body a:after{right:110px;}
    }
    @media only screen and (min-width: 993px){
        body .container{width:90%;}
    }
    @media only screen and (min-width: 1201px){
        body .container{width:80%;}
        #notify{margin-right:15px;}
    }
    /*! CSS Used from: https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css */
    ::-moz-selection{background:#b3d4fc;text-shadow:none;}
    ::selection{background:#b3d4fc;text-shadow:none;}
    @media print{
        *,*:before,*:after{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
        a,a:visited{text-decoration:underline;}
        a[href]:after{content:" (" attr(href)")";}
        p{orphans:3;widows:3;}
    }
    a{-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0);}
    body{width:100%;min-height:100%;}
    body{font-family:'Helvetica','Arial',sans-serif;font-size:14px;font-weight:400;line-height:20px;}
    p{padding:0;}
    p{font-weight:400;line-height:24px;}
    p{font-size:14px;letter-spacing:0;margin:0 0 16px;}
    a{color:rgb(255,64,129);font-weight:500;}
    ul{font-weight:400;letter-spacing:0;}
    ul{font-size:14px;line-height:24px;}
    .mdl-badge{position:relative;white-space:nowrap;margin-right:24px;}
    .mdl-badge[data-badge]:after{content:attr(data-badge);display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;position:absolute;top:-11px;right:-24px;font-family:'Roboto','Helvetica','Arial',sans-serif;font-weight:400;font-size:12px;width:22px;height:22px;border-radius:50%;background:rgb(255,64,129);color:#fff;}
    body{margin:0;}
    /*! CSS Used from: https://fonts.googleapis.com/icon?family=Material+Icons */
    .material-icons{font-family:'Material Icons';font-weight:normal;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;-webkit-font-feature-settings:'liga';-webkit-font-smoothing:antialiased;}
    /*! CSS Used from: Embedded */
    #scroll{border:1px solid black;width:250px;min-height:40px;max-height:400px;}
    #scroll{overflow-y:auto;margin-bottom:12px;}
    /*! CSS Used fontfaces */
    @font-face{font-family:"Roboto";src:local(Roboto Thin), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Thin.woff2") format("woff2"), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Thin.woff") format("woff");font-weight:100;}
    @font-face{font-family:"Roboto";src:local(Roboto Light), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Light.woff2") format("woff2"), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Light.woff") format("woff");font-weight:300;}
    @font-face{font-family:"Roboto";src:local(Roboto Regular), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Regular.woff2") format("woff2"), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Regular.woff") format("woff");font-weight:400;}
    @font-face{font-family:"Roboto";src:local(Roboto Medium), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Medium.woff2") format("woff2"), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Medium.woff") format("woff");font-weight:500;}
    @font-face{font-family:"Roboto";src:local(Roboto Bold), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Bold.woff2") format("woff2"), url("http://127.0.0.1:8000/fonts/roboto/Roboto-Bold.woff") format("woff");font-weight:700;}
    @font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/materialicons/v41/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');}
</style>

