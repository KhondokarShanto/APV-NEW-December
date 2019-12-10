@extends('backend.master');

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-5">
      	<div class="col-lg-5 col-md-5">
      	</div>
      	<div class="col-lg-7 col-md-5">
	        <div class="card card-user">
	          <div class="content">
	            <div class="author" style="margin-top: 20px; margin-left:50px; text-align:center;">
	            	
	            </div>
	          </div>
	        </div>
      	</div>
    </div>
    <div class="col-md-12">
        <div class="header" style="margin-left: 20px;">
          <h2 class="title">Order Details</h2>
        </div>
        <div class="col-md-12">
          	<table class="table table-hover">
          		<thead>
	              <tr>
	              	<th class="col-md-3">Customer Name</th>
	                <th class="col-md-3">Product Status:</th>
	                <th class="col-md-6">Issue Date:</th>
	                <th></th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	              	<td class="col-md-3">{{$cart->merchandiser->user_name}}</td>
	                <td class="col-md-3">{{$cart->status}}</td>
	                <td class="col-md-3">{{$cart->created_at}}</td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	                <th class="col-md-3">Area</th>
	                <th class="col-md-3">Distributor</th>
	                <th class="col-md-6">Contact</th>
	                <th></th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	                <td class="col-md-3">{{$cart->area->name}}</td>
	                <td class="col-md-3">
	                	@if(!empty($cart->distributor_id))
	                		{{$cart->distributor->user_name}}
	                	@endif
	                </td>
	                <td class="col-md-3">{{$cart->merchandiser->phone_no}}</td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	                <th class="col-md-3">Product:</th>
	                <th class="col-md-3">Quantity</th>
	                <th class="col-md-3">Base</th>
	                <th class="col-md-3">Total</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	            	@foreach($carts as $cart)
		              	<tr>
		                	<td class="col-md-3">{{$cart->product->name}}</td>
		                	<td class="col-md-3">{{$cart->quantity}}</td>
		                	<td class="col-md-3">{{$cart->product->price}}</td>
		                	<td class="col-md-3">{{$cart->price}}</td>
		              	</tr>
	              	@endforeach
	            </tbody>

	            <thead>
	              	<tr>
	              		<th class="col-md-5"></th>
	                	<th class="col-md-5">Total Cost:</th>
	              	</tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              	<tr>
	              		<td class="col-md-5"></td>
	                	<td class="col-md-5">
	                  		{{$totalPrice}}
	                	</td>
	              	</tr>
	            </tbody>
          	</table>

          	<div class="text-center" style="margin-bottom: 10px; ">
          		<a href="{{ route('show.order')}}">
          			<button type="button" class="btn btn-success">
				      Back
				    </button>
          		</a>
          		<b></b>
          		@if(auth()->user()->type=='admin')
		        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			    	Assign Distributor
			    </button>
			    @endif
		    </div>

      	</div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
     	<div class="modal-content">
	        <div class="modal-header">
	           <h5 class="modal-title" id="exampleModalLabel"> Assign Distributor</h5>
	           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	           <span aria-hidden="true">&times;</span>
	           </button>
	        </div>

        	<div class="modal-body">
          		<form action="{{ route('update.order',[$cart->merchandiser_id])}}" method="post" role="form" enctype="multipart/form-data">
            	@csrf 
		            @if(auth()->user()->type=='admin')
		            <div class="form-group">    
		                <label for="name">Distributor:</label>
		                <select class="form-control" id="distributor_id" name="distributor_id" >
		                	@foreach($distributors as $distributor)
	                    	<option value="{{$distributor->id}}">
	                      		{{$distributor->user_name}}
	                      	</option>
	                      	@endforeach
	                    </select>
		            </div>
		            @endif

		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-primary">Assign</button>
		            </div>
           		</form>
        	</div>
     	</div>
  	</div>
</div>
@endsection