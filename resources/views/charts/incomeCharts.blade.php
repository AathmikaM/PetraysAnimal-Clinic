@extends('layouts.layouts')


@section('title', 'Total income')


@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection


@section('content')

<div class="container">
	<div class="panel-body">
	From :<input type="date" name="startDate" id="startDate">
	To :<input type="date" name="endDate" id="endDate">
    <div class="panel panel-primary">
    </div>
            <!-- <div class="panel-heading">CLIENT BASE</div> -->
        <div class="panel-body">
            {!! $chart1->html() !!}  
        </div>
    </div>
</div>

{!! Charts::scripts() !!}
{!! $chart1->script() !!}


@endsection


