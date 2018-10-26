@extends('layouts.app')
@section('page-title')
Add Product 
@endsection
@section('content')
<a href="{{ route('admin-index') }}" class="d-i-block">Dashboard</a> / <a href="{{ route('products-index') }}" class="d-i-block">Products</a> / Add Product
<div class="card card-rounded">
    <div class="card-body p-b-0">
        <div class="col-md-12">
            @if (session('message'))
            <div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> {{ session('message') }}</div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {!! Form::open(['url' => route('products-store'), 'files' => true, 'novalidate' => 'novalidate']) !!}
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label">Product Name</label>
                {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                <label class="control-label">Product Type</label>
                {{ 
                    Form::select(
                        'type', 
                        [
                            'loan'      => 'Loan',
                            'insurance' => 'Insurance'
                        ],
                        null,
                        [
                            'class' => 'form-control', 
                            'required' => 'required'
                        ]
                    )
                }}
            </div>
            <div class="form-group">
                <label class="control-label">Description</label>
                {{  Form::textarea('description', null, ['class'=>'form-control', 'required'=>'required']) }}
            </div>
            <div class="form-group">
                <label class="btn p-r-50 p-l-50">SELECT IMAGE TO UPLOAD <input type="file" name="image" required style="visibility: hidden" required>
                </label>
            </div>
            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
