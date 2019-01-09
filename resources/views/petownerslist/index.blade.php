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

  <!-- <form class="example" action="/action_page.php">
    <input type="text" placeholder="Type Mobile Number.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form> -->


<!-- display pet owners and their phone number -->  
<div class="container" style="padding-top: 40px;">  

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

        <div style="padding-left: 250px;">
        <a href="{{action('postToPetOwnersList@edit',$petowner->id)}}" class="btn btn-warning">Edit</a>
        <form method="post" class="delete_form" action="{{action('postToPetOwnersList@destroy',$petowner->id)}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form> 
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

