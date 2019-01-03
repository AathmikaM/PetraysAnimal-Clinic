@extends('layouts.layouts')


@section('title', 'Pet Owner list')



@section('style')


 <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> 

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 -->
@endsection



@section('content')
<h3>&nbsp;&nbsp;Clients</h3>
<div class="form-group row">
    <label for="mobile"class="col-sm-4 col-form-label text-md-left"><b>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Mobile Number') }}</b></label>

    <div class="col-md-6">
        <input id="mobile" type="number" class="form-control" align="right" name="mobile"  required autofocus>
        <!--<button type="submit" id="addNew" value="Add New Petowner"></button>-->
    </div>

    <div class="modal fade" id="modalPetowner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 font-weight-bold">Add Pet Owner</h3>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form method="post" action="/petowners/addnewowner/">
         @csrf
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
            <input type="text" id="name" name="name" class="form-control validate" placeholder="Your Name">
        </div>

        <div class="md-form mb-4">
          <input type="text" id="address" name="address" class="form-control validate" placeholder="Your Address">
        </div>

        <div class="md-form mb-4">
          <input type="number" id="mob_no" name="mob_no" class="form-control validate" placeholder="Your Mobile No">
        </div>

        <div class="md-form mb-4">
          <input type="text" id="email" name="email" class="form-control validate" placeholder="Your Email">
        </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-default">Add</button>
      </div>
  </form>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalPetowner">Add New Pet Owner</a>
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
