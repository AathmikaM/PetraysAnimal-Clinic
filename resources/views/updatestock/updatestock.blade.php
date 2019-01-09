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


                
                    <div class="card mb-4">
                            <div class ="card-header">
                                <h1 class="text-center" class="breadcrumb-item active"><strong>Update Stock</strong></h1>
                            </div>
                    </div>


                    <div class="card mb-3">
                            <div class="card-header">
                                <div class="card-body">

                                
                        
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
                                            <label class="control-label col-sm-2" for="name"><strong>Medicine Name</strong></label>
                                            <div class="col-md-6">
                                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" class="form-control" value="{{$addstock->name}}" value="{{ old('name') }}" required autofocus />
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="name"><strong>Quantity</strong></label>
                                            <div class="col-md-6">
                                            <input type="text" name="quantity" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" class="form-control" value="{{$addstock->quantity}}" value="{{ old('quantity') }}" required autofocus />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name"><strong>Module</strong></label>
                                            <div class="col-md-6">
                                            <input type="text" name="module" class="form-control{{ $errors->has('module') ? ' is-invalid' : '' }}"  class="form-control" value="{{$addstock->module}}" value="{{ old('module') }}" required autofocus />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="name"><strong>Unit Price</strong></label>
                                            <div class="col-md-6">
                                            <input type="text" name="unit_price" class="form-control{{ $errors->has('unit_price') ? ' is-invalid' : '' }}" class="form-control" value="{{$addstock->unit_price}}" placeholder="Enter Unit Prize " value="{{ old('unit_price') }}" required autofocus/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label class="control-label col-sm-2" for="name"><strong>Selling_unit_price<strong></label>
                                                    <div class="col-md-6">
                                                    <input type="text" name="selling_unit_price" class="form-control{{ $errors->has('selling_unit_price') ? ' is-invalid' : '' }}" class="form-control" value="{{$addstock->selling_unit_price}}" placeholder="Enter Selling_Unit_Prize " value="{{ old('selling_unit_price') }}" required autofocus/>
                                                    </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="name"><strong>Expiry Date</strong></label>
                                            <div class="col-md-6">
                                            <input type="date" name="expire_date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}" class="form-control" value="{{$addstock->expire_date}}" placeholder="Enter Expire Date "  value="{{ old('expire_date') }}" required autofocus />
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
                                        <label class="control-label col-sm-2" for="name"><strong>Relevent Species</strong></label>
                                            <div class="col-md-6">
                                            <input type="text" name="relevent_species" class="form-control{{ $errors->has('relevent_species') ? ' is-invalid' : '' }}" class="form-control" value=" {{$addstock->relevent_species }}" placeholder="Enter Relevent Species " value="{{ old('relevent_species') }}" required autofocus />
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

