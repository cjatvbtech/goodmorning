@extends('layouts.app')
@section('page-title')
Categories
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin-index') }}" class="d-i-block">Dashboard</a> / Categories
        @if (session('message'))
        <div class="alert alert-success">
            <i class="glyphicon glyphicon-ok"></i>
            {{ session('message') }}
        </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Categories</h3>
            </div>
            <div class="panel-body">
                <a href="{{ route('categories-form')}}" class="btn btn-md"><i class="fa fa-edit" aria-hidden="true"></i> Add</a>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($categories as $cat)
                        <tr>
                            <td nowrap>
                                <a  href="{{route('products-index',['cat_id'=>$cat->id])}}">{{ $cat->name }}</a>
                            </td>
                            <td>{{$cat->description}}</td>
                            <td width="80px">
                                <a href="{{route('categories-delete',['id'=>$cat->id])}}">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                                <a href="{{route('categories-delete',['id'=>$cat->id])}}">
                                    <i class="fa fa-remove fa-2x"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection