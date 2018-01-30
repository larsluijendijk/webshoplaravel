@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
					@foreach($products as $product)
					    <div class="col-xs-12 col-sm-6 col-md-4"> 
     						 <div class="panel panel-default">
              			<div class="panel-heading">{{ $product->name }}</div>
       						 	<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      						  	<div class="panel-footer">{{ $product->price }}</div>
      						</div>
    					</div>
                
					@endforeach
				</div>
            </div>
        </div>
    </div>
</div>
@endsection