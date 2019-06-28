@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col">
        <h2>Detail Product</h2>
        <div>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
            <a href="{{ route('admin.products.index') }}" class="btn btn-warning">Back</a>
        </div>
        <br />
        @csrf
        <div class="form-group">
            <label for="nama">Name Product</label>
            <input class="form-control" type="text" name="nameProduct" id="nama" value="{{ $products['name'] }}" readonly>
        </div>
        <div class="form-group">
            <label for="desc">Description Product</label>
            <textarea class="form-control" id="desc">{{ $products->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price Product</label>
            <input class="form-control" type="text" name="priceProduct" id="price" value="{{ $products['price'] }}" readonly>
        </div>
        @if(!$products->images()->get()->isEmpty())
        @foreach($products->images()->get() as $idx => $image)
        @if ($idx == 0 || $idx % 4 == 0 )
        <div class="mt-4">
            @endif

            <img src="{{ asset('/img/'.$image->image_src) }}" class="img img-thumbnail" width="300">
            @if($idx > 0 && $idx % 4 == 3)
        </div>
        @endif
        @endforeach
        @endif
        <div class="form-group">
            <label for="price">Product Created</label>
            <input class="form-control" type="text" name="priceProduct" id="price" value="{{ $products['created_at'] }}" readonly>
        </div>
    </div>
</div>
@endsection