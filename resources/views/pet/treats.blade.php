@extends('layout')




 @section('content')

 <div class="container">
 <div class="card mb-4">
        <div class ="card-header">
             <h1 class="text-center" class="breadcrumb-item active">General Treatments</h1>
        </div>
    </div>


 <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">
 
 <form method="post" action="/pets/{{$petowner->id}}/{{$pet->id}}/general/save">
 @csrf

  <div class="form-group">
    <label for="title">Title Of The Treatment</label>
    <input type="email" class="form-control" value="" id="title" aria-describedby="emailHelp" placeholder="Enter Title Of Treatment">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" value="description" rows="3"></textarea>
  </div>

  <!-- *********************************** -->
  
  <div class="container">
<div class="card">
@if(count($temps)>0)
    @foreach($temps as $temp)

      <div class="card border-primary" >
      <div class="card-body">
         <div class="row">
            <div class="col-md-4">
              {{$temp->type}}
            </div>
            <div class="col-md-3">
              {{$temp->selling_unit_price}}+ * + {{$temp->quantity}}
              </div>
            <div class="col-md-3 text-left">
            {{$temp->selling_unit_price}}*{{$temp->quantity}}
            </div>
      
              <div class="col-md-1">
              <form method="POST" action="/pets/{{$petowner->id}}/{$pet->id}/general/delete/{{$temp->id}}">
                @method('DELETE')
                @csrf
                <button type="button" class="close" aria-label="Close">  <span aria-hidden="true">&times;</span></button>
                </form>
                </div>
            </div> 
          </div> 
        </div>
      </div>
    </div>
   </div> 
   @endforeach
   @endif
</div>
</div>


<!-- 
************************************** -->



<div class="row">
    <div class="col-md-7">

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Medicine</label>
    <select class="form-control" name="medicine" id="exampleFormControlSelect1">
    @if(count($medicines)>0)
      @foreach($medicines as $medicine)

      @if(($medicine->medcine_type)==0)
                  @if(($medicine->quantity)>0)
      <option  value="{{$medicine->id}}">{{$medicine->name}}</option>
                  @endif
      @else
        @if(($medicine->quantity)>0)
      <option value="{{$medicine->id}}">{{$medicine->name}}</option>
        @endif
      @endif


      @endforeach
     @endif 
    </select>
  </div>
</div>
 
 <div class="col-md-3">
 
 <label for="title">Quantity</label>
    <input type="text" class="form-control" value="" id="title" aria-describedby="title" name="quantity" placeholder="Quantity">
 </div>
 <div class="col-md-2">
  <div class="col-md-2">
 <label for="title">add</label>
 </div>
    <button type="submit" value="add" class="btn btn-success">Add+</button>
 </div>
 </div>
 
 </form>


  <button  class="btn btn-primary" action="">Submit</button>







<br>
<br>
<br>

<h1>Recently Added</h1>

</div>
</div>
</div>
</div>



@endsection 