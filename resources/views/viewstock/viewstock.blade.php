 @extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTabl es.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection



@section('content')

<div class="container">
    <!-- Breadcrumbs-->
 

  <div class="row">
    <div class ="col-md-12">
        <br />
            <h3 align="center">VIEW MEDICINE</h3>
        <br />
      
        @if($message = Session::get('success'))
          <div class = "alert alert-success">
            <p>{{$message}}</p>
          </div>
        @endif 


      <table class= "table table-bordered">
          <tr>
            <th>Name</th>
			 <th>Module</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Expire Date</th>
			 <th>Medicine Type</th>
            <th>Relevent Species</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach($allstock as $key => $add)
              <tr>
                <td>{{$add->name}}</td>
				<td>{{$add->module}}</td>
                <td>{{$add->quantity}}</td>
                <td>{{$add->unit_price}}</td>
                <td>{{$add->expire_date}}</td>
				<td>{{$add->medcine_type}}</td>
                <td>{{$add->relevent_species}}</td>
                <td><a href="{{action('addstockController@edit',$add['id'])}}" class="btn btn-warning">Edit</td>
                <td>
                  <form method="post" class="delete_form" action="{{action('addstockController@destroy',$add['id'])}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>

          
          @endforeach
          
         

      </table>
    </div>
  </div> 

    
    <!-- DataTables Example -->
  {{-- <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Stock Table</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <td>Name</td>
              <td>Quantity</td>
              <td>Brand</td>
              <td>Price</td>
              <td>Expire Date</td>
            </tr>
          </thead>
          
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>

            
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted"></div>
  </div> --}}

   
</div>

<script>
  $(document).ready(function(){
    $('.delete_form').on('submit',function(){
      if(confirm("Are You Sure Want To Delete It? "))
      {
        return true;
      }
        return false;
      }
    });
  });  
</script>

@endsection


