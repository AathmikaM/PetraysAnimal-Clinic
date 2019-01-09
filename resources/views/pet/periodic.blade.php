@extends('layout')




@section('content')

<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <h1 class="text-center" class="breadcrumb-item active">Add periodic Schedule</h1>
        </div>
    </div>

    <form method="post" action="/pets/{{$petowner->id}}/{{$pet->id}}/periodic/store" >
    @csrf
    <div class="card">
        <div class="card-header">
                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="5" required autofocus></textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                </div>
        </div>
    </div>  


    <div class="card mb-4">
        <div class="card-header">
            
                
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="expire_date" class="col-md-4 col-form-label text-md-left"><strong>Start Date</strong></label>
                            <div class="col-md-10">
                                <input id="expire_date" placeholder="Shedule Start Date" type="date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}"
                                    name="start_date" value="{{ old('expire_date') }}" required autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="expire_date" class="col-md-4 col-form-label text-md-left"><strong>End Date</strong></label>
                            <div class="col-md-10">
                                <input id="expire_date" placeholder="Enter Shedule End Date" type="date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}"
                                    name="end_date" value="{{ old('expire_date') }}" required autofocus>
                                @if ($errors->has('expire_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('expire_date') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Add+</button>
                    </div>

                </div>



            </form>


        </div>
    </div>
    
    @if(count($periodictreatments)>0)    
    @foreach($periodictreatments as $treatment)   
    
    <div class="card mb-4">
        <div class ="card-header">
        <div class="row">
        <div class="col-md-9">
             <h1 class="text-left" class="breadcrumb-item active ">{{$treatment->description}}</h1>
        </div>
        <div class="col-md-3">
        <h2 class="text-center" class="breadcrumb-item active">{{$treatment->created_at}} </h2>
        </div>
        </div>
        <div class="row"> </div>
        <h3>Mail Sent</h3>
        </div>
    </div>
@endforeach
@endif
</div>


@endsection