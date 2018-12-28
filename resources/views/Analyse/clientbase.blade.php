@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection



@section('content')
 


<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Analysis</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Analyse</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
 
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
                <div class="panel panel-primary">
 
        <div class="panel-heading">Charts In Laravel 5 Using Charts Package</div>
 
            <div class="panel-body">    
                <div class="row">
                    <div class="col-md-6"> 
                {!! $chart->html() !!}
                    </div>
                </div>
            </div>
        </div>	


    </div>

    {!! Charts::scripts() !!}
    {!! $chart->script() !!}

            @endsection

