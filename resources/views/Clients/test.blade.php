@extends('layouts.layouts')


@section('title', 'Clients Profile')



@section('style')



@endsection



@section('content')
 


<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">---Our Clients---</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Clients Profile</li>
                        </ol>
                    </div>
				</div>
</div>



                <!-- Row -->
                <!-- Row -->
  
                <!-- End PAge Content -->
                <!-- ============================================================== -->



            @endsection



<div class="container">
    
    @if(count($pet)>0)

        <ul class="list-goup">
        <h1>Clients</h1>
        @foreach($pet as $post)
            <h2>
            <li class="list-group-item"><a href="/client/{{$post->id}}">{{$post->name}}</a> <h2>
            <small>{{$post->mob_no}}</small>
            </li>
        @endforeach
        </ul>

    @endif
</div>
