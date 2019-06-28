@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row mt-4">
			<div class="col-md-4 ">
		<div class=" list-group">
                <select name="" id="category_field" class="custom-select">
                  <option value="" disabled selected>Category</option>
                  <option value="sejarah">Sejarah</option>
                  <option value="novel">Novel</option>
                </select>
			  </div>
			</div>
		</div>
	<div class="row mt-4">
		<div class="col-md-4 offset-md-8">
			<div class="form-group">
				<select id="order_field" class="form-control">
					<option value="" disabled selected>Urutkan</option>
					<option value="best_seller">Best Seller</option>
					<option value="terbaik">Terbaik (Berdasarkan Rating)</option>
					<option value="termurah">Termurah</option>
					<option value="termahal">Termahal</option>
					<option value="terbaru">Terbaru</option>
					<option value="viewer">Best Viewer</option>
				</select>
			</div>
		</div>
	</div>
	<div id="product-list">
	@foreach($products as $idx => $product)
		@if ($idx == 0 || $idx % 4 == 0)
			<div class="row mt-4">
		@endif
		
		<div class="col">
			<div class="card">
				{{-- @if (!$product->images()->get()->isEmpty())
				<img src="{{ asset('/img/'.$product->images()->get()[0]->image_src) }}" style="width: 200px; height: 200px" class="center">
				@endif --}}
				<?php
					$pro=App\Models\Product::find($product->id);

					?>
					<img src="{{ asset('/img/'.$pro->images()->get()[0]->image_src) }}" style="width: 200px; height: 200px" class="center">

				<div class="card-body">
					<h5 class="card-title">
						<a href="{{ route('products.show', ['id' => $product->id]) }}">
							{{ $product -> name}}
						</a>
					</h5>
					<p class="card-text">
						{{ $product -> price }}
					</p>
					<a href="{{ route('carts.add', ['id' => $product->id]) }}" class="btn btn-primary">Beli</a>
					<a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-warning">Show</a>
				</div>
			</div>
		</div>	

		@if ($idx > 0 && $idx % 4 == 3)
			</div>
		@endif
	@endforeach
	</div>

	<?php
          $product = App\Models\Product::paginate(3);
          ?>
          <br>
{{ $product->links() }}

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">       
	$(document).ready(function() {
	  $('#order_field').change(function() {
		  $.ajax({
			  type: 'GET',
			  url: '/',                
			  data: {
				  order_by: $(this).val(),
				},
			  dataType: 'json', 
			  success: function(data) {
				  var products = '';
				  $.each(data, function(idx, product) {
					  if (idx == 0 || idx % 4 == 0) {
						  products += '<div class= "row mt-4">';
						  
					  }

					  products += '<div class="col">' +
						  '<div class="card">' +
						  '<img src="/products/'+ product.image_src+'" class="img img-thumbnail" style="width: 300px;height: 200px;">'+
						  '<div class="card-body">' +
						  '<h5 class="card-title">' +
						  '<a href="/product/' + product.id + '">' +
							product.name +
						  '</a>'+
					  '</h5>'+
					  '<p class="card-text">' +
					  product.price +
						  '</p>' +
						  '<a href="/carts/add/' + product.id + '" class= "btn btn-primary">Beli</a>' +
						  '<a href="/products/' + product.id + '" class= "btn btn-warning">Show</a>' +
						  '</div>' +
						  '</div>' +
						  '</div>'
					  if (idx > 0 && idx % 4 == 3) {
						  products += '</div>'
					  }
				  });
				  // update element
				  $('#product-list').html(products);
			  },
			  error: function(data) {
				  alert('Unable to handle request');
			  },
		  });
	  });
  });
	
</script>	

<script type="text/javascript">
       
	$(document).ready(function() {
	  $('#category_field').change(function() {
		  $.ajax({
			  type: 'GET',
			  url: '/',                
			  data: {
				  order_by: $(this).val(),
				},
			  dataType: 'json', 
			  success: function(data) {
				  var products = '';
				  $.each(data, function(idx, product) {
					  if (idx == 0 || idx % 4 == 0) {
						  products += '<div class= "row mt-4">';
						  
					  }

					  products += '<div class="col">' +
						  '<div class="card">' +
						  '<img src="/products/'+ product.image_src+'" class="img img-thumbnail" style="width: 300px;height: 200px;">'+
						  '<div class="card-body">' +
						  '<h5 class="card-title">' +
						  '<a href="/product/' + product.id + '">' +
							product.name +
						  '</a>'+
					  '</h5>'+
					  '<p class="card-text">' +
					  product.price +
						  '</p>' +
						  '<a href="/carts/add/' + product.id + '" class= "btn btn-primary">Beli</a>' +
						  '<a href="/products/' + product.id + '" class= "btn btn-warning">Show</a>' +
						  '</div>' +
						  '</div>' +
						  '</div>'
					  if (idx > 0 && idx % 4 == 3) {
						  products += '</div>'
					  }
				  });
				  // update element
				  $('#product-list').html(products);
			  },
			  error: function(data) {
				  alert('Unable to handle request');
			  },
		  });
	  });
  });
	
	</script>	
</div>



@endsection