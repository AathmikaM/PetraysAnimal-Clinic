@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


{{-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> --}}

@endsection



@section('content')
 
<div class="container">
    <!-- Breadcrumbs-->
    

    <div class="card mb-4">
        <div class ="card-header">
             <h1 class="text-center" class="breadcrumb-item active">Add New Medicine</h1>
        </div>
    </div>
 
    <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">

          
              @if(count($errors)>0)
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif

              @if(\Session::has('success'))
              <div class="alert alert-success">
                  <p>{{\Session::get('success')}}</p>
              </div>
              @endif


            <form method = "post" action="{{url('addstock')}}" > 

            {{ csrf_field() }}  
 
                <div class="form-group">
                    <label for="name" class="col-md-4 col-form-label text-md-left"><strong>Medicine Name </strong></label>
                    <div class="col-md-8">
                        <input id="name"  placeholder="Enter Medicine Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        <div id="medicineList"></div>  

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{ csrf_field()}}

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="module" class="col-md-4 col-form-label text-md-left"><strong>Modules</strong></label>
                        <div class="col-md-8">
                            <input id="module"  placeholder="Enter Type Of Module" type="double" class="form-control{{ $errors->has('module') ? ' is-invalid' : '' }}" name="module" value="{{ old('module') }}" required autofocus>
                            @if ($errors->has('module'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('module') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                

               
                    <div class="col-md-6">
                        <label for="quantity" class="col-md-4 col-form-label text-md-left"><strong>Quantity</strong></label>
                        <div class="col-md-8">
                            <input id="quantity"  placeholder="Enter Quantity" type="double" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" value="{{ old('quantity') }}" required autofocus>
                            @if ($errors->has('quantity'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('quantity') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                
              
               <div class="form-group">
                    <label for="unit_price" class="col-md-4 col-form-label text-md-left"><strong>Unit price</strong></label>
                    <div class="col-md-8">
                        <input id="unit_price"  placeholder="Enter Unit Prize" type="text" class="form-control{{ $errors->has('unit_price') ? ' is-invalid' : '' }}" name="unit_price" value="{{ old('unit_price') }}" required autofocus>
                        @if ($errors->has('unit_price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('unit_price') }}</strong>
                            </span>
                        @endif
                    </div>
               </div>
              

              <div class="form-group">
                <label for="expire_date" class="col-md-4 col-form-label text-md-left"><strong>Expire Date</strong></label>
                <div class="col-md-8">
                    <input id="expire_date"  placeholder="Enter Expire Date" type="date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}" name="expire_date"  value="{{ old('expire_date') }}" required autofocus >
                    @if ($errors->has('expire_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('expire_date') }}</strong>
                        </span>
                    @endif
                </div>
             </div>

            
               <div class="form-group">
              <label for="expire_date" class="col-md-4 col-form-label text-md-left"  rows="4"><strong>Medicine Type</strong></label>
              <div class="col-md-6">
                <form method="post">
                <p><input type="checkbox" name= "language[]" value="new medicine"/>new medicine</p>
                <p><input type="checkbox" name= "language[]" value="old medicine"/>old medicine</p>
                </form>
              </div>
           </div> 
   



               <div class="form-group">
                <label for="expire_date" class="col-md-4 col-form-label text-md-left"  rows="4"><strong>Relevent Species</strong></label>
                <div class="col-md-8">
                  <input id="relevent_species" placeholder="Enter Relevent Species" type="text" class="form-control{{ $errors->has('relevent_species') ? ' is-invalid' : '' }}" name="relevent_species" value="{{ old('relevent_species') }}" required autofocus>
                    @if ($errors->has('relevent_species'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('relevent_species') }}</strong>
                        </span>
                    @endif
                </div>
             </div>

              
            <div class="form-group"> 
              <div class="col-sm-offset-7 col-sm-5">
                {{-- <input type="submit"  class="btn btn-success"/>  --}}
                <button type="submit" class="btn btn-primary">PROCEED</button> 
              </div>
            </div>
               
           
            
          </form> 

            </div>
        </div>
    </div>

{{-- 
    <div class="card mb-3">
        <div class="card-header">
             <li class="breadcrumb-item active">Add Medicine</li>
        </div>
    </div>


    
    <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">
            <form class="form-horizontal" action="/action_page.php">

            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Medicine Name:</label>
              <div class="col-sm-6">
                <input type="name" class="form-control" id="name" placeholder="Enter Name">
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="quantity">Quantity:</label>
                <div class="col-sm-6">
                  <input type="quantity" class="form-control" id="quantity" placeholder="Enter Quantity">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="up">Unit Price:</label>
                <div class="col-sm-6">
                  <input type="up" class="form-control" id="up" placeholder="Enter Unit price">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="ed">Expire Date:</label>
                <div class="col-sm-6">
                  <input type="ed" class="form-control" id="ed" placeholder="Enter Expire Date">
                </div>
              </div>

    

            <div class="form-group"> 
              <div class="col-sm-offset-7 col-sm-5">
                <button type="button" class="btn btn-danger">PROCEED</button>
              </div>
            </div> 

            
          </form>

            </div>
        </div>
    </div>   --}}
  



    {{-- <h2>Recently Added Stock Details</h2>

    <!-- Button trigger modal -->
    <button class = "btn btn-primary btn-lg" data-toggle = "modal" data-target = "#myModal" text-align: center>
       Medicine 
    </button>
    
    <!-- Modal -->
    <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
       aria-labelledby = "myModalLabel" aria-hidden = "true">
       
       <div class = "modal-dialog">
          <div class = "modal-content">
             
             <div class = "modal-header">
                <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                      &times;
                </button>
                
                <h4 class = "modal-title" id = "myModalLabel">
                    Recently Addded Stock
                </h4>
             </div>
             
             <div class = "modal-body">
                <h2>Recently Added Stock Details</h2>
                <h2>Recently Added Stock Details</h2>
                <h2>Recently Added Stock Details</h2>
                <h2>Recently Added Stock Details</h2>
                <h2>Recently Added Stock Details</h2>

                
             </div>
             
             <div class = "modal-footer">
                <button type = "button" class = "btn btn-default" data-dismiss = "modal" >
                   Close
                </button>
                
                 <button type = "button" class = "btn btn-primary">
                   Submit changes
                </button> 
             </div>


             
<script>
        $(document).ready(function(){
    
                $('#relevent_species').tokenfield({
                    autocomplete:{
                        source:['Cat','Dog','Cow','Pigs','Snakes',],
                        delay:100
                    },
                    showAutocompleteOnFocus: true
                });
        });
    
    </script>


             
          </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
      
    </div><!-- /.modal -->
 --}}


</div> 




@endsection

<script>
        $(document).ready(function(){
    
                $('#relevent_species').tokenfield({
                    autocomplete:{
                        source:['Cat','Dog','Cow','Pigs','Snakes'],
                        delay:100
                    },
                    showAutocompleteOnFocus: true
                });
        });
    
</script> 

  {{-- <script>
    $(document).ready(function(){

                $('#name').keyup(function(){
                    var query = $(this).val();
                    if(query != '')
                    {
                        var _token = $('input[name= "_token"]').val();
                        $.ajax({
                            url:"{{route('addstock.fetch')}}"
                            method:"POST",
                            data:{query:query, _token:_token},
                            success:function(data)
                            {
                                $('#medicineList').fadeIn();
                                $('#medicineList').html(data);
                            }
                        })
                    }
                });
    });

</script>   --}}
