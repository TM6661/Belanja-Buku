@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col">
        <h2>Add Product</h2>
        <br />

        @if(count($errors))
        <div class="form-group">
            <div class="alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Name Product</label>
                <input class="form-control" type="text" name="name" placeholder="Product Name" id="nama">
            </div>
            <div class="form-group">
                <label for="desc">Description Product</label>
                <input class="form-control" type="text" name="description" placeholder="Product Description" id="desc">
            </div>
            <div class="form-group">
                <label for="price">Price Product</label>
                <input class="form-control" type="text" name="price" placeholder="Product Price" id="price">
            </div>
            <div class="form-group increment">
                <label>Upload</label>
                <input type="file" class="form-control-file" name="images[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection
<script src="{{url('js/jquery.tinymce.min.js')}}"></script>
<script src="{{url('js/tinymce.min.js')}}"></script>
<script>
    tinymce.init({
        selector: '#ckview'
    });
</script>