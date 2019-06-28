@extends('layouts.admin')

@section('content')

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Books</div>
    <div class="card-body">
        @if (session('success'))
        <div class="form-group">
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Created at</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Created at</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>{{ $product['created_at'] }}</td>
                        <td class="text-center">
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                @csrf
                                <a href="{{ route('admin.products.edit', $product->id) }}" class='btn btn-info btn-xs fa fa-pencil-square-o'>Edit</a>
                                <a href="{{ route('admin.products.show', $product->id) }}" class='btn btn-warning btn-xs fa fa-pencil-square-o'>Detail</a>
                                @method('DELETE')
                                <button class="btn btn-danger btn btn-danger btn-xs fa fa-trash-o" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 