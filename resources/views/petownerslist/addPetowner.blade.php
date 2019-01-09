@extends('layouts.layouts')

@section('title', 'Add Pet owner')

@section('style')


@endsection


@section('content')

<div class="container">

    <div class="card mb-4">
        <div class ="card-header">
            <h1 class="text-center" class="breadcrumb-item active"><strong>Add Petowner</strong></h1>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">


        <div class="form-group">
            <label for="name" class="col-md-4 col-form-label text-md-left"><strong>Name :</strong></label>
                <div class="col-md-10">
                    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="stockName" name="stockName" placeholder="" required>
                </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-md-4 col-form-label text-md-left"><strong>Address :</strong></label>
                <div class="col-md-10">
                    <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" id="address" name="address" placeholder="" required>
                </div>
        </div>

        <div class="form-group">
            <label for="mob_no" class="col-md-4 col-form-label text-md-left"><strong>Mobile Number :</strong></label>
                <div class="col-md-10">
                    <input type="number" class="form-control {{ $errors->has('mob_no') ? ' is-invalid' : '' }}" id="mob_no" name="mob_no" placeholder="" required>
                </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-4 col-form-label text-md-left"><strong>Email :</strong></label>
                <div class="col-md-10">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="" required>
                </div>
        </div>

            </div>
        </div>
    </div>
</div>

@endsection