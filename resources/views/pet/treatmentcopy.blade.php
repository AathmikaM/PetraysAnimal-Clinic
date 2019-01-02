@extends('layout')




 @section('content')
 <div class="container">
 <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">
 <form>
  <div class="form-group">
    <label for="title">Title Of The Treatment</label>
    <input type="email" class="form-control" value="title" id="title" aria-describedby="emailHelp" placeholder="Enter Title Of Treatment">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" value="description" rows="3"></textarea>
  </div>

  <div class="form-group">
<div class="row">
    <div class="col-lg-9">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select Medicine</label>
  </div>

  <select class="custom-select" id="inputGroupSelect01">
    <!-- @foreach($medicine as $med)
    <option value={{$med->id}}>{{$med->name}}</option>
    @endforeach -->

  </select>
</div>

 </div>
 <div class="col-lg-2">
 
 <label for="title">Quantity</label>
    <input type="email" class="form-control" value="title" id="title" aria-describedby="emailHelp" placeholder="Enter Title Of Treatment">
 </div>
 <div class="col-lg-1">
 <button type="submit" value="add" class="btn btn-success">Add+</button>
 </div>
 </div>
 </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<br>
<br>
<br>

<h1>Recently Added</h1>

<!-- @if(count($treatments)>0)
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

 -->


@endforeach
</ul>

@endif
</div>
</div>
</div>
</div>
@endsection 