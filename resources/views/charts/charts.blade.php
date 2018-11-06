@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection



@section('content')

<div>
<div class="container">
    <div class="panel panel-primary">
            <div class="panel-heading">STOCK</div>
        <div class="panel-body">
            {!! $chart->html() !!}  
        </div>
    </div>
</div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}




@endsection


