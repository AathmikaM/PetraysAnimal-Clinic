@extends('layouts.layouts')

@section('title', 'Client base ')

@section('style')

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection

@section('content')

<div class="container-fluid" style="margin-top:20px margin-left:40px">
    <div class="col-md-8">
    	<div class="card" style="margin-left:40px">
        <!-- Card content -->
            <div class="card-body" style="width: 50%">
                <h4 class="card-title"><a>Annual Analysis</a></h4>
                    <form action="/analyse" class="form-group">
                        <label for="" >Year</label>
                        <input type="text" class="form-control" name="year"><br><br>
                        <input type="submit" value="Client Base" class="btn btn-success btn-md" >
                        <input type="submit" value="Income" class="btn btn-success btn-md" >
                    </form>
            </div>
          </div>
        </div>
</div>


@endsection


