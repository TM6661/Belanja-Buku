@extends('layout.app')

@section('content')
<div class="container">

	@foreach($products as $idx => $product)
		@if ($idx == 0 || $idx % 4 == 0)
			<div class="row mt-4">
		@endif
		
		<div class="col">
			<div class="card">
				<img src="{{ route('products.image', ['imageName' => $product['image_url']]) }}" class="card-image-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">
						<a href="{{ route('products.show', ['id' => $product['id']]) }}">
							{{ $product -> name}}
						</a>
					</h5>
					<p class="card-text">
						{{ $product -> price }}
					</p>
					<a href="#" class="btn btn-primary">Beli</a>
				
				</div>
			</div>
		</div>	

		@if ($idx > 0 && $idx % 4 == 3)
			</div>

		@endif
	@endforeach
</div>
@endsection