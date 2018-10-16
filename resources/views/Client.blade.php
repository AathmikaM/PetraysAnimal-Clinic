@extends('layouts.layouts')


@section('title', 'Appointments')



@section('style')
<style>
    .row-striped:nth-of-type(odd){
        background-color: #efefef;
        border-left: 4px #000000 solid;
    }

    .row-striped:nth-of-type(even){
        background-color: #ffffff;
        border-left: 4px #efefef solid;
    }

    .row-striped {
        padding: 15px 0;
    }
</style>


@endsection



@section('content')
 


<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Appintments</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Appintments</li>
                        </ol>



                        <!------ Include the above in your HEAD tag ---------->



                        <div class="container">
                            <div class="row row-striped">
                                <div class="col-2 text-right">
                                    <h1 class="display-4"><span class="badge badge-secondary">23</span></h1>
                                    <h2>OCT</h2>
                                </div>
                                <div class="col-10">
                                    <h3 class="text-uppercase"><strong>Home Visit Request</strong></h3>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
                                        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                                        <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Wellawatte</li>
                                    </ul>
                                    <p></p>
                                </div>
                            </div>


                        </div>

                    </div>



                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

  
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>



            @endsection


