@extends('layout')




 @section('content')

 <div class="container">
 <div class="card mb-4">
        <div class ="card-header">
             <h1 class="text-center" class="breadcrumb-item active">Add periodic Schedule</h1>
        </div>
    </div>

    
    <div class="card mb-4">
        <div class ="card-header">
             <form> 

  <div class="row">

      <div class="col-md-4">
             <div class="form-group">
                <label for="expire_date" class="col-md-4 col-form-label text-md-left"><strong>Start Date</strong></label>
                <div class="col-md-10">
                    <input id="expire_date"  placeholder="Enter Expire Date" type="date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}" name="start_date"  value="{{ old('expire_date') }}" required autofocus >
                   
                        

                </div>
             </div>
          </div>

          <div class="col-md-4">
             <div class="form-group">
                <label for="expire_date" class="col-md-4 col-form-label text-md-left"><strong>End Date</strong></label>
                <div class="col-md-10">
                    <input id="expire_date"  placeholder="Enter Expire Date" type="date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}" name="end_date"  value="{{ old('expire_date') }}" required autofocus >
                    @if ($errors->has('expire_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('expire_date') }}</strong>
                        </span>
                    @endif
                </div>
             </div>
            </div>

            <div class="col-md-4">
            <br>
            <br>
            <button type="submit" class="btn btn-outline-primary">Add+</button>
            </div>

             </div>



             </form>
        </div>
    </div>
</div>
    

@endsection 