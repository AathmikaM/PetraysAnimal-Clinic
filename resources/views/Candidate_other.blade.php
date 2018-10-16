@extends('layouts.layouts')


@section('title', 'HRM Candidate')



@section('style')



@endsection



@section('content')
 


<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Candidate Registation Form</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Candidate Registation Form</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="Candidate">Registation</a>
    <a class="dropdown-item" href="Candidate_call">Call</a>
    <a class="dropdown-item" href="Candidate_history">History</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="Candidate_other">Other</a>
    <a class="dropdown-item" href="Candidate_Reference">Reference</a>
  </div>
</div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row" style ="background: #fff; padding: 15px;">
                    
				<div class="col-md-4">
				
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Day</span>
					</label>
				</div>
				<br>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Understand</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Read</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Speak</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Write</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Safety Boots</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Own Transportatior</span>
					</label>
				</div>
				

				</div>
				<div class="col-md-4">
					

                <div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Afternoon</span>
					</label>
				</div>
				<br>
                <div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Scarborough</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Toronto</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Etobicoke</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Mississauga</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Markham</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Richmond Hill</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Vaughan</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Brampton</span>
					</label>
				</div>


				</div>
				<div class="col-md-4">
					
                <div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">Midnight</span>
					</label>
				</div>

				</div>


				</div>

                </div>
                <!-- Row -->
                <!-- Row -->
  
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>



            @endsection


            @section('scripts')


            @endsection