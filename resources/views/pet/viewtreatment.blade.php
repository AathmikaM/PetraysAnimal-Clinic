@extends('layout')




 @section('content')

 <div class="container">
 <div class="card mb-4">
        <div class ="card-header">
             <h1 class="text-center" class="breadcrumb-item active">Treatment History</h1>
        </div>
    </div>
@if(count($treatments)>0)    
    @foreach($treatments as $treatment)   
    
    <div class="card mb-4">
        <div class ="card-header">
        <div class="row">
        <div class="col-md-9">
             <h1 class="text-left" class="breadcrumb-item active ">{{$treatment->title}}</h1>
        </div>
        <div class="col-md-3">
        <h2 class="text-center" class="breadcrumb-item active">{{$treatment->created_at}} </h2>
        </div>
        </div>
        <div class="row"> </div>
        <h3>{{$treatment->description}}</h3>
        </div>

        <div class="container">
        <div class="hide">
            {{$issuedmeds=$treatment->issuedmedicine}}
        </div>
        @if(count($issuedmeds)>0)     
         @foreach($issuedmeds as $issuedmed)   
            <div class="row">
                
                 <div class="col-md-9">
                 {{$issuedmed->type}}     
                </div>
            <div class="col-md-3">
               {{$issuedmed->price}}  
             </div>
        </div>

            @endforeach
        @endif
        </div>
        
        <div class="container">
        <hr>
        <div class="row">
        <div class="col-md-9">
        totoal
        </div>
        <div class="col-md-3">
        {{$treatment->total_cost}}
        </div>
        </div>
        </div>
        
    </div>


    @endforeach    
@endif
</div>
@endsection 