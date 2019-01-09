<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
    <div class="col-xs-12">
    <div class="invoice-title">
    			<h2>Pet-Rays-Animal-Clinic</h2>
    		</div>
    </div>
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					{{$petowner->name}}<br>
                        {{$petowner->mob_no}}<br>
    					{{$petowner->address}}<br>
    					{{$petowner->email}}
    					
    				</address>
    			</div>
    		</div>
            <br>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Petrays Animal Clinic</strong><br>
    					No 74,Old Kottawa Rd,<br>
    					Nugegoda.
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Invoice Created at:</strong><br>
    					{{$treatdata->created_at}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    						    @if(count($temps)>0)
                                    @foreach($temps as $temp)
    							<tr>
    								<td>{{$temp->type}}</td>
    								<td class="text-center">{{$temp->selling_unit_price}}</td>
    								<td class="text-center">{{$temp->quantity}}</td>
    								<td class="text-right">{{$temp->price}}</td>
    							</tr>
                                    @endforeach
                                @endif    
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">{{$total}}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <h1 align="center">www.petrayz.tk</h1>
</div>