@extends('layouts.app')
@section('content')
    <style>
        .profile-pic {
            margin-top: 20px;
        }

        label {
            font-weight: bolder;
        }
    </style>

    <div class="row">

        @include('partials.member_left_nav')

        <div class="col-sm-9">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('requirements-upload')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="type">Type</label>
                    {{Form::select('type',$requirementTypes,0,['class'=>'form-control','autocomplete'=>false])}}
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" id="image" name="image"/>
                </div>
                <br/>
                <input type="submit" class="btn" name='submit_image' value="Upload Image"/>

            </form>


        </div>
    </div>
@endsection
