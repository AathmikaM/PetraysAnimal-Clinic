@extends('layouts.layouts')

@section('title', 'Pet Owner list')

@section('style')

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> 

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 -->
@endsection

@section('content')

<h3>&nbsp;&nbsp;Clients</h3>
<div class="form-group row">
    <label for="mobile"class="col-sm-4 col-form-label text-md-left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile Number</b></label>
    <div class="col-md-6">
        <input id="mobile" type="number" class="form-control" align="right" name="mobile"  required autofocus>
    </div>

<!-- modal add New petowner -->
    <div class="modal fade" id="modalPetowner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h3 class="modal-title w-100 font-weight-bold">Add Pet Owner</h3>
          </div>
              <form method="post" action="/petowners/addnewowner/">
              @csrf
                <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                    <input type="text" id="name" name="name" class="form-control validate" placeholder="Your Name">
                  </div>

                  <div class="md-form mb-4">
                    <input type="text" id="address" name="address" class="form-control validate" placeholder="Your Address">
                  </div>

                  <div class="md-form mb-4">
                    <input type="number" id="mob_no" name="mob_no" class="form-control validate" placeholder="Your Mobile No">
                  </div>

                  <div class="md-form mb-4">
                    <input type="email" id="email" name="email" class="form-control validate" placeholder="Your Email">
                  </div>
                </div>

                  <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-default">Add</button>
                  </div>
              </form>
        </div>
      </div>
    </div>

      <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalPetowner">Add New Pet Owner</a>
      </div>
</div>
<!-- modal close -->



<!-- display pet owners and their phone number -->  
<div class="container">  
@if(count($petowners)>0)
    @foreach($petowners as $petowner)    
  <div class="card mb-8">
    <div class ="card-header">
      <div class="col-md-6">

        <div class="col-md-5">     
            <h1 class="text-center" class="breadcrumb-item active"><a href="/pets/{{$petowner->id}}"><h5>{{$petowner->name}}</h5></a></h1>
        </div>

        <div class="col-md-3">
          <h2>  {{$petowner->mob_no}}</h2>
        </div>      

      </div>

    </div>
  </div>   
@endforeach
</div>
</div>
@endif
</div>

@endsection

