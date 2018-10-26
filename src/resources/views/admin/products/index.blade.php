@extends('layouts.app')
@section('page-title')
Products
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin-index') }}" class="d-i-block">Dashboard</a> / Products
        <a href="{{ route('products-form') }}" class="d-i-block pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
        @if (session('message'))
        <div class="alert alert-success">
            <i class="glyphicon glyphicon-ok"></i>
            {{ session('message') }}
        </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped m-b-0">
                    <thead>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Description</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ strtoupper($product->type) }}</td>
                            <td>{!! str_limit($product->description, 100, "...") !!}</td>
                            <td width="80px">
                                <a href="{{ route('products-edit', ['id' => $product->id]) }}">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                                <a href="{{ route('products-delete', ['id' => $product->id]) }}">
                                    <i class="fa fa-trash fa-2x"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No products available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection