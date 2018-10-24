@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection

<div class="row">
        <div class="col-md-12">
            <br />
                <h3>Edit Record</h3>
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
                        <input type="text" name="name" class="form-control" value="{{$addstock->name}}" placeholder="Enter Medicine Name " />
                    </div>

                    <div class="form-group">
                        <input type="text" name="quantity" class="form-control" value="{{$addstock->quantity}}" placeholder="Enter Quantity " />
                    </div>

                    <div class="form-group">
                        <input type="text" name="unit_price" class="form-control" value="{{$addstock->unit_price}}" placeholder="Enter Unit Prize " />
                    </div>

                    <div class="form-group">
                        <input type="text" name="expire_date" class="form-control" value="{{$addstock->expire_date}}" placeholder="Enter Expire Date " />
                    </div>

                    <div class="form-group">
                        <input type="text" name="relevent_species" class="form-control" value=">{{$addstock->relevent_species }}" placeholder="Enter Relevent Species " />
                    </div>

                    <div class="form-group">
                        <input type="submit"  class="btn btn-primary" value="Edit" />
                    </div>

            </form>
        </div>
</div>

@section('content')
 

@endsection


