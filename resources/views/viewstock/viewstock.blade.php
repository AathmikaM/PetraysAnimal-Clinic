@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection



@section('content')

<div class="container">
    <!-- Breadcrumbs-->
 <ol class="breadcrumb">
    <li class="breadcrumb-item active">VIEW STOCK</li>
  </ol>

 
  <div class="panel-body">
    <div class ="table-responsive">
      <table class= "table table-striped table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Expire Date</th>
            <th>Relevent Species</th>
          </tr>
        </thead>
        <tbody>
          @foreach($allstock as $key => $add)
            <tr>
              <td>{{$add->name}}</td>
              <td>{{$add->quantity}}</td>
              <td>{{$add->unit_price}}</td>
              <td>{{$add->expire_date}}</td>
              <td>{{$add->relevent_species}}</td>
            </tr>

          
          @endforeach
          
         

          </tbody>
      </table>
    </div>
  </div> 

    
    <!-- DataTables Example -->
  {{-- <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Stock Table</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <td>Name</td>
              <td>Quantity</td>
              <td>Brand</td>
              <td>Price</td>
              <td>Expire Date</td>
            </tr>
          </thead>
          
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>

            
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted"></div>
  </div> --}}

   
</div>


@endsection


