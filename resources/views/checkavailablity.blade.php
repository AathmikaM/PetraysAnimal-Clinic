@extends('layouts.layouts')


@section('title', 'Client List')

<div class="col-md-6">
    <center>
      <a class="btn btn-primary btn-round btn-lg" href = "{{route('srprofile')}}"  >My Profile</a>
      &nbsp;&nbsp;
      <a class="btn btn-primary btn-simple btn-round btn-lg" href = "{{route('srsale')}}" >Add Sale</a>
    </center>
    </div>

@section('style')



@endsection



@section('content')
 
<style>
    .flash-message{
        z-index: 50000;
        position: relative;
        width: auto;
        height: auto;
    }
    </style>


<div class="container">

    <form method="POST" action="{{ route('stockupdate') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">

    
        <div class="form-group row justify-content-center">
            <div class="col-md-6">
                <label class="bmd-label-floating">Stock Type</label>
                <select name="prod_id" class="productname" id="prod_name">
                    <option value="0" disabled="true" selected="true">--Select--</option>
                        @foreach ($prod as $item)
                            <option value="{{$item->stockName}}">{{$item->stockName}}</option>
                        @endforeach
                </select>
              <button type="button" class="bt_check_available" onclick="checkAvailability()">Check Availability</button>

            </div>
            
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-md-3">
                <label class="bmd-label-floating">Available Quantity</label>
            <input type="text" class="form-control" disabled id="disp_quantity" name="disp_quantity"  required>
            </div>
        

        
              <div class="col-md-3">
                <label class="bmd-label-floating">Price</label>
                <input type="text" class="form-control" disabled id="disp_price" name="disp_price" required>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script type="text/javascript">

          $(document).ready(function(){
              var element_to_scroll_to = document.getElementById('sale');
              var navbar_height = 20;
              animate_scroll(element_to_scroll_to, navbar_height, 100);
              
              
              function animate_scroll (element, variable, offset) {
              $('html, body').stop().animate({
              scrollTop: $(element).offset().top - variable - offset
          }, 600);
          }
          });

          </script>
                    <script>
                            function checkAvailability(){
                            var e = document.getElementById('prod_name');
                            var selected_stock_type = e.options[e.selectedIndex].value;
                            $.ajax({
                                type:'get',
                                url:'{{URL::to('checkAvailability')}}',
                                data:{'prod_name':selected_stock_type},
                                dataType:'json',
                                success:function(data){
                                    console.log(data);
                                    document.getElementById('disp_quantity').setAttribute('value',data.stockQuantity);
                                    document.getElementById('disp_price').setAttribute('value',data.sellingPrice);
                                },
                                error:function(){
                                    console.log("Error - 2");
                                }
                            });
                            
                            
                            }
                        </script>

</form>
                
  
</div>




@endsection

