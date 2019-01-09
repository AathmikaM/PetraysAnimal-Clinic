@extends('layouts.layouts') @section('title', 'Stock Management') @section('style') @endsection @section('content')


<div class="container">

    {{-- Title --}}
    <div class="card mb-4">
        <div class="card-header">
            <h1 class="text-center" class="breadcrumb-item active"><strong>Add Stock</strong></h1>
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
                @endif @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
                @endif


                <form method="post" action="{{url('addstock')}}">

                    {{ csrf_field() }} {{-- medicine name field --}}
                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-left"><strong>Medicine Name </strong></label>
                        <div class="col-md-10">
                            <input id="name" placeholder="Enter Medicine Name" autocomplete="off" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                name="name" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>

                    {{ csrf_field()}} {{-- Quantity @ Module Feilds --}}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="quantity" class="col-md-4 col-form-label text-md-left"><strong>Quantity</strong></label>
                            <div class="col-md-8">
                                <input id="quantity" placeholder="Enter Quantity" type="double" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                    name="quantity" value="{{ old('quantity') }}" required autofocus>                                @if
                                ($errors->has('quantity'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('quantity') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="module" class="col-md-4 col-form-label text-md-left"><strong>Modules</strong></label>
                            <div class="col-md-8">
                                <input id="module" name="module" placeholder="Enter Type Of Module" type="text" class="form-control{{ $errors->has('module') ? ' is-invalid' : '' }}"
                                    name="module" value="{{ old('module') }}" required autofocus>                                @if
                                ($errors->has('module'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('module') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    {{-- Buying_Unit_Feild Field --}}
                    <div class="form-group">
                        <label for="unit_price" class="col-md-4 col-form-label text-md-left"><strong>Buying_Unit_price</strong></label>
                        <div class="col-md-10">
                            <input id="unit_price" placeholder="Enter Buying_Unit_Price" type="text" class="form-control{{ $errors->has('unit_price') ? ' is-invalid' : '' }}"
                                name="unit_price" value="{{ old('unit_price') }}" required autofocus>                            @if
                            ($errors->has('unit_price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('unit_price') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    {{-- Seing_Unit_Prize Feild --}}
                    <div class="form-group">
                        <label for="selling_unit_price" class="col-md-4 col-form-label text-md-left"><strong>Selling_unit_price</strong></label>
                        <div class="col-md-10">
                            <input id="selling_unit_price" placeholder="Enter Selling_Unit_Price" type="text" class="form-control{{ $errors->has('selling_unit_price') ? ' is-invalid' : '' }}"
                                name="selling_unit_price" value="{{ old('selling_unit_price') }}" required autofocus>                            @if
                            ($errors->has('selling_unit_price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('selling_unit_price') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    {{-- Expire Date Field --}}
                    <div class="form-group">
                        <label for="expire_date" class="col-md-4 col-form-label text-md-left"><strong>Expire Date</strong></label>
                        <div class="col-md-10">
                            <input id="expire_date" placeholder="Enter Expire Date" type="date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}"
                                name="expire_date" value="{{ old('expire_date') }}" required autofocus>                            @if
                            ($errors->has('expire_date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('expire_date') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    {{-- Medicine Type Feild --}}
                    <div class="form-group">
                        <label for="expire_date" class="col-md-4 col-form-label text-md-left" rows="4"><strong>Medicine Type</strong></label>
                        <div class="col-md-6">

                            <p><input type="checkbox" name="medcine_type" id="medcine_type" value="1" />new medicine</p>
                            <p><input type="checkbox" name="medcine_type" id="medcine_type" value="0" />old medicine</p>

                        </div>
                    </div>



                    {{-- Relevent Species Field --}}
                    <div class="form-group">
                        <label for="expire_date" class="col-md-4 col-form-label text-md-left" rows="4"><strong>Relevent Species</strong></label>
                        <div class="col-md-10">
                            <input id="relevent_species" placeholder="Enter Relevent Species" type="text" class="form-control{{ $errors->has('relevent_species') ? ' is-invalid' : '' }}"
                                name="relevent_species" value="{{ old('relevent_species') }}" required autofocus>                            @if
                            ($errors->has('relevent_species'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('relevent_species') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    {{-- Proceed Button --}}
                    <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-5">
                            <button type="submit" class="btn btn-primary">PROCEED</button>
                        </div>
                    </div>



                </form>

            </div>
        </div>
    </div>
</div>




@endsection {{-- Try to autoload medicines to medicine list --}} {{-- @push('js')
<script>


    $(document).ready(function () {

        $('#name').keyup(function () {
            var query = $(this).val();

            if (query != '') {
                var _token = $('input[name= "_token"]').val();
                $.ajax({
                    url: "{{route('addstock.fetch')}}",
                    method: "POST",
                    data: { query: query, _token: _token },
                    success: function (data) {
                        $('#medicineList').fadeIn();
                        $('#medicineList').html(data);
                    }
                })
            }
        });
    });

</script> @endpush --}}