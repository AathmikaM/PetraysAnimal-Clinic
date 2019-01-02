@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


 <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> 

@endsection



@section('content')
<h3> Clients</h3>
<div class="form-group row">
    <label for="mobile" class="col-sm-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

    <div class="col-md-6">
        <input id="mobile" type="number" class="form-control" name="mobile"  required autofocus>
    </div>
</div>
    

   
@if(count($petowners)>0)



<div class="row">
<div class="col-lg-12">
@foreach($petowners as $petowner)    

<div class="col-lg-6">
    <div class="panel-primary">
        <div class="panel-heading">
            <a href="/pets/{{$petowner->id}}"><h5>{{$petowner->name}}</h5> </a>  
        </div>
        <div class="panel-body">
            {{$petowner->mob_no}}
        </div>
    </div>
</div>
   
@endforeach
</div>
</div>

@endif


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

  <script>
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

</script>  
