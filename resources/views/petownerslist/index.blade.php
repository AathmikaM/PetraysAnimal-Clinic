@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


 <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> --}}

@endsection



@section('content')


    

   
@if(count($petowners)>0)

<ul class="list-goup">
<h1>Clients</h1>
<div class="row">
<div class="col-sm-12 ">
@foreach($petowners as $petowner)
    <h2>
    

<div class="card">
<div class="card-body">
<div class="col-sm-6 ">
<div class="float-left mb-6"><a href="/pets/{{$petowner->id}}">{{$petowner->name}} </a></div>  
</div>
<div class="col-sm-6">
<div class="text-centerS mb-6">

<small>{{$petowner->mob_no}}</small>
</div>
    </div>
    
@endforeach


@endif
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
