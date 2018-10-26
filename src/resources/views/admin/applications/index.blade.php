@extends('layouts.app')
@section('page-title')
Applications
@endsection
@section('content')
<a href="{{ route('admin-index') }}" class="d-i-block">Dashboard</a> / Applications
<div class="card">
    <div class="card-body">
        @if (session('message'))
        <div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> {{ session('message') }}</div>
        @endif
        <h2 class="m-b-10 text-left">Latest Applications</h2>
        <table class="table text-center table-striped m-b-0">
            <thead class="bgm-blue">
                <th class="c-white text-center p-20" style="font-weight: lighter">Tracking Code</th>
                <th class="c-white text-center p-20" style="font-weight: lighter">Type</th>
                <th class="c-white text-center p-20" style="font-weight: lighter">Company</th>
                <th class="c-white text-center p-20" style="font-weight: lighter">Contact Person</th>
                <th class="c-white text-center p-20" style="font-weight: lighter">Product</th>
                <th class="c-white text-center p-20" style="font-weight: lighter">Product Type</th>
                <th class="c-white text-center p-20" style="font-weight: lighter">Number of Items</th>
                <th class="c-white text-center p-20" style="font-weight: lighter">Status</th>
                <th class="c-white text-center p-20"></th>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->tracking_code }}</td>
                    <td>{{ strtoupper($application->type) }}</td>
                    <td>{{ $application->company_name }}</td>
                    <td>{{ $application->contact_person }}</td>
                    <td>{{ $application->product->name }}</td>
                    <td>{{ strtoupper($application->product->type) }}</td>
                    <td>{{ $application->number_of_items }}</td>
                    <td>
                        <span class="badge {{ $application->status_class }}">{{ $application->status }}</span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin-loans-show', ['tracking_code' => $application->tracking_code]) }}"><i class="fa fa-eye fa-2x"></i></a>
                        <a href="{{ route('admin-loans-delete', ['tracking_code' => $application->tracking_code]) }}"><i class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
