@extends('layouts.app')
@section('content')
    <div class="row">
        <br><br>
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add new client</h3>
                </div>
                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            <i class="glyphicon glyphicon-ok"></i>
                            {{ session('message') }}
                        </div>
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
                    {!! Form::open(['url' => route('categories-store'),'files' => true]) !!}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        {{  Form::text('name', null,['class'=>'form-control','required'=>'required','placeHolder'=>'Name'])}}
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        {{  Form::email('email', null,['class'=>'form-control','required'=>'required','placeHolder'=>'Email'])}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <i class="glyphicon glyphicon-floppy-disk"></i>
                            Save
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
