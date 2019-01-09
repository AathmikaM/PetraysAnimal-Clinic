@extends('layout')




@section('content')





<form id="main" method="post" action="/pets/{{$petowner->id}}/{{$pet->id}}/save" >
  @method('PUT')
  @csrf
  <div class="card-header">

    <div class="row">
      <div class="col-6">
        <div class="card mb-5 ">
          <div class="card-header">
            <div class="py-5 text-center">
              <!-- add the href to get image -->
              <img class="rounded-circle" src="data:image/jpg;charset=utf8;base64,{{base64_encode($pet->image)}}" alt="Generic placeholder image"
                width="140" height="140">
              <h2>Pet Name:{{$pet->name}} </h2>
              <h3>Species:{{$pet->species}}</h3>
              <h4>Weight of The Pet:{{$pet->weight}} Kg</h4>
              <h5>Age Of The Pet:{{$pet->age}} Yrs</h5>

            </div>
          </div>
        </div>
      </div>


      <div class="col-6">
        <div class="form-group">
          <h3>Special Note</h3>
          <textarea class="form-control" type="text" id="special_note" name="special_note" rows="27">{{$pet->special_note}}</textarea>
          <div class="row">
            <div class="orm-control col-lg-2">
              <button type="submit" class="btn btn-danger">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>



<div class="row">
  <div class="col-6">
    <div class="row">
      <div class="col-6">

        <a class="btn btn-primary btn-lg btn-block" href="/pets/{{$petowner->id}}/{{$pet->id}}/general">Add-General-Treatments</a>
      </div>
      <div class="col-6">
        <a class="btn btn-primary btn-lg btn-block" href="/pets/{{$petowner->id}}/{{$pet->id}}/view">View-General-Treatments</a>
      </div>
    </div>
  </div>
  <div class="col-6">
    <a class="btn btn-primary btn-lg btn-block" href="/pets/{{$petowner->id}}/{{$pet->id}}/periodic">Periodic-Schedule</a>
  </div>
</div>




@endsection