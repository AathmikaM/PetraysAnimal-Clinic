@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


 <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> 


@endsection



@section('content')
<div class="container">
    
<div class="py-5 text-center">
            
             <img class="rounded-circle" src="data:image/jpg;charset=utf8;base64,{{base64_encode($petowner->image)}}"  width="140" height="140"/>
             <h2 > {{$petowner->name}}</h2>
            <h3>{{$petowner->email}}</h3>
            <h5>{{$petowner->address}}</h5>
            <h4>{{$petowner->mob_no}}</h4>
          </div>


@if(count($pets)>0)

<ul class="list-goup">
<h1 class="text-center">{{$petowner->name}}'S Pets</h1>
<hr>
<hr>
<div class="row justify-content-center">
<div class="col-sm-3 ">
@foreach($pets as $pet)
<div class="card text-white bg-dark mb-4" style="max-width: 18rem;">
  <div class="card-header"><a href="/pets/{{$petowner->id}}/{{$pet->id}}" style="color:black">{{$pet->name}} </a></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <img class="rounded-circle" src="data:image/jpg;charset=utf8;base64,{{base64_encode($pet->image)}}"  width="140" height="140"/>
  </div>
</div>
</div>

@endforeach
</div>
</div>
</ul>

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
