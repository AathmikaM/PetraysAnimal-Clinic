@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>



@endsection


@section('content')

<div class="container">
<div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center">EDIT RECORD</h3>
            <br />

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
        
            @endif

            <form method="post" action="{{action('addstockController@update',$id )}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />

                    <div class="form-group">
                         <label class="control-label col-sm-2" for="name">Medicine Name:</label>
						<div class="col-md-6">
                        <input type="text" name="name" class="form-control" value="{{$addstock->name}}"  />
                        </div>
                    </div>
					
					<div class="form-group">
                         <label class="control-label col-sm-2" for="name">Module:</label>
						<div class="col-md-6">
                        <input type="text" name="module" class="form-control" value="{{$addstock->module}}" />
                        </div>
                    </div>

                    <div class="form-group">
					<label class="control-label col-sm-2" for="name">Quantity:</label>
                        <div class="col-md-6">
                        <input type="text" name="quantity" class="form-control" value="{{$addstock->quantity}}" placeholder="Enter Quantity " />
                        </div>
                    </div>

                    <div class="form-group">
					<label class="control-label col-sm-2" for="name">Unit Price:</label>
                         <div class="col-md-6">
                        <input type="text" name="unit_price" class="form-control" value="{{$addstock->unit_price}}" placeholder="Enter Unit Prize " />
                         </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Selling_unit_price:</label>
                                 <div class="col-md-6">
                                <input type="text" name="selling_unit_price" class="form-control" value="{{$addstock->selling_unit_price}}" placeholder="Enter Selling_Unit_Prize " />
                                 </div>
                    </div>

                    <div class="form-group">
					<label class="control-label col-sm-2" for="name">Expiry Date:</label>
                        <div class="col-md-6">
                        <input type="date" name="expire_date" class="form-control" value="{{$addstock->expire_date}}" placeholder="Enter Expire Date " />
                        </div>
                    </div>
					
					<div class="form-group">
					
             			 <label for="medcine_type" class="col-md-4 col-form-label text-md-left"  rows="4"><strong>Medicine Type</strong></label>
              				<div class="col-md-6">
             <!--   <form method="post">-->
				                <p><input type="checkbox" name= "medcine_type" id= "medcine_type" value="{{$addstock->medcine_type}}"/>new medicine</p>
				                <p><input type="checkbox" name= "medcine_type"  id= "medcine_type" value="{{$addstock->medcine_type}}"/>old medicine</p>
                <!--</form>-->
              		</div>
           		</div> 

                    <div class="form-group">
					<label class="control-label col-sm-2" for="name">Relevent Species:</label>
                        <div class="col-md-6">
                        <input type="text" name="relevent_species" class="form-control" value=" {{$addstock->relevent_species }}" placeholder="Enter Relevent Species " />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="submit"  class="btn btn-primary" value="Edit" />
                        </div>
                    </div>

            </form>
        </div>
</div>
</div>



@endsection
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

