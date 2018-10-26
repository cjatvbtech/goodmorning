@extends('layouts.app')
@section('content')
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Clients</h3>
                </div>
                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            <i class="glyphicon glyphicon-ok"></i>
                            {{ session('message') }}
                        </div>
                    @endif
                    <a href="{{route('clients-form')}}">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                        Add
                    </a>
                    <br>
                    <br>
                    <table class="table ">
                        <thead>
                        </thead>
                        <tbody>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th width="30px" nowrap>Action</th>
                        @foreach($clients as $client)
                            <tr>
                                <td nowrap>
                                    <a href="{{route('clients-show',['client_id'=>$client->id])}}">
                                        {{$client->name}}
                                    </a>
                                </td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->profile->cellphone_number}}</td>
                                <td>[insert status]</td>
                                <td width="80px">
                                    <a href="{{route('clients-show',['id'=>$client->id])}}">
                                        <i class="fa fa-edit fa-2x"></i>
                                    </a>

                                    {{--<a href="{{route('categories-delete',['id'=>$client->id])}}">--}}
                                        {{--<i class="fa fa-remove fa-2x"></i>--}}
                                    {{--</a>--}}
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