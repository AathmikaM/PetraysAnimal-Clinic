@extends('layout')




 @section('content')

 <div class="container">
 <div class="card mb-4">
        <div class ="card-header">
             <h1 class="text-center" class="breadcrumb-item active">Periodic Treatments</h1>
        </div>
    </div>


 <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">
 
 <form>

  <div class="form-group">
    <label for="title">Title Of The Treatment</label>
    <input type="email" class="form-control" value="" id="title" aria-describedby="emailHelp" placeholder="Enter Title Of Treatment">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" value="description" rows="3"></textarea>
  </div>

  
<div class="row">
    <div class="col-md-7">

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Medicine</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Panadol</option>
      <option>Disprene</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
</div>
 
 <div class="col-md-3">
 
 <label for="title">Quantity</label>
    <input type="text" class="form-control" value="" id="title" aria-describedby="title" placeholder="Quantity">
 </div>
 <div class="col-md-2">
  <div class="col-md-2">
 <label for="title">add</label>
 </div>
    <button type="submit" value="add" class="btn btn-success">Add+</button>
 </div>
 </div>
 




  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<br>
<br>
<br>

<h1>Recently Added</h1>

</div>
</div>
</div>
</div>



@endsection 