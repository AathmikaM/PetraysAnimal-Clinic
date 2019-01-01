@extends('layout')




 @section('content')

{!! Form::open(['action' => 'postToPets@store','method'=>'post']) !!}


 
 <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="/petowners/{id}/{id}">Genaral-Treatments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/petowners/{id}/{id}/periodic">Periodic-Treatments</a>
      </li>
      
    </ul>
  
 <div class="container">
      <div class="py-5 text-center">
            <!-- add the href to get image -->
            <img class="rounded-circle" src="data:image/jpg;charset=utf8;base64,{{base64_encode($pet->image)}}"  alt="Generic placeholder image" width="140" height="140">
            <h2 >{{$pet->name}} </h2>
            <p>{{$pet->species}}</p>
            <p>{{$pet->weight}}</p>
            <p>{{$pet->age}}</p>
            
          </div>
          </div>

  <div class="form-group">
    {{Form::label('specialNote','Special Discription about pet')}}
    {{Form::textarea('specialNote','',['class'=>'form-control','placeholder'=>'Note-Down Here '])}}
</div>

<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
</div>


<div class="form-group">
    {{Form::label('specialNote','Discription about treatment')}}
    {{Form::textarea('specialNote','',['class'=>'form-control','placeholder'=>'Note-Down Here '])}}
</div>




 
{{Form::submit('Save',['class'=>'btn btn-primary','name'=>'save','value'=>'save'])}}


    
{!! Form::close() !!} 













<br>
<br>
<br>

<h1>Recently Added</h1>

@if(count($treatments)>0)
@foreach($treatments as $treatment)


  <div class="card-header">
  <h5 class="card-title">{{$treanment->title}}</h5>
  </div>
  <div class="card text-center">
  <div class="card-body">
    
    <p class="card-text">{{$treanment->description}}</p>
    <a href="#" class="btn btn-primary">Edit Treatment Reccord</a>
    <a href="#" class="btn btn-primary">Delete Treatment Reccord</a>
  </div>
  <div class="card-footer text-muted">
  {{$treanment->created_at}}
  </div>
</div>
<br>
<br>


<!-- <div class="my-3 p-3 bg-white rounded box-shadow">
        <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">{{$treanment->colour}}</strong>
              <small>{{$treanment->species}}</small>
            </div>
</div>

    <small>{{$treanment->species}}</small>
<hr>
<hr>
     -->

@endforeach
</ul>

@endif
</div>
@endsection 