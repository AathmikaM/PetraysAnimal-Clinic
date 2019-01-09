@extends('layouts.layouts')

@section('title', 'Update Petowner')

@section('style')


@endsection


@section('content')

<div class="container">

    <div class="card mb-4">
        <div class ="card-header">
            <h1 class="text-center" class="breadcrumb-item active"><strong>Edit Petowner</strong></h1>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">


        <div class="form-group">
            <label for="name" class="col-md-4 col-form-label text-md-left"><strong>Name :</strong></label>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" class="form-control" value="{{$petowners->name}}" value="{{ old('name') }}" required autofocus />
                </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-md-4 col-form-label text-md-left"><strong>Address :</strong></label>
                <div class="col-md-10">
                    <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" class="form-control" value="{{$petowners->address}}" value="{{ old('address') }}" required autofocus />
                </div>
        </div>

        <div class="form-group">
            <label for="mob_no" class="col-md-4 col-form-label text-md-left"><strong>Mobile Number :</strong></label>
                <div class="col-md-10">
                  <input type="number" name="name" class="form-control{{ $errors->has('mob_no') ? ' is-invalid' : '' }}" class="form-control" value="{{$petowners->mob_no}}" value="{{ old('mob_no') }}" required autofocus />
                </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-4 col-form-label text-md-left"><strong>Email :</strong></label>
                <div class="col-md-10">
                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" class="form-control" value="{{$petowners->email}}" value="{{ old('email') }}" required autofocus />
                </div>
        </div>

            </div>
        </div>
    </div>
</div>

@endsection