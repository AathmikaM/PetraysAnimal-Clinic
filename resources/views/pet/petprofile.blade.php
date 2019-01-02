@extends('layout')




 @section('content')



 
 
 <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="/petowners/{id}/{id}">Genaral-Treatments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/petowners/{id}/{id}/periodic">Periodic-Treatments</a>
      </li>
      
    </ul>

 <div class="row">
    <div class="col-6"> 
      <div class="py-5 text-center">
            <!-- add the href to get image -->
            <img class="rounded-circle" src="data:image/jpg;charset=utf8;base64,{{base64_encode($pet->image)}}"  alt="Generic placeholder image" width="140" height="140">
            <h2 >Pet Name:{{$pet->name}} </h2>
            <h3>Species:{{$pet->species}}</h3>
            <h4>Weight of The Pet:{{$pet->weight}}</h4>
            <h5>Age Of The Pet:{{$pet->age}}</h5>
            
         
          </div>
          </div>


<form id="main" method="post" action="{{route('pet/{id}/{pid}',$pet->id)}}">
<div class="col-6"> 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Special Notes</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" value="{{$pet->specialnote}}"></textarea>
    <div class="row">
    <div class="orm-control col-lg-2">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
    <div class="orm-control col-lg-0">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
  </div>
  </div>
  </div>
  
  

















@endsection 