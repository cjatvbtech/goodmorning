@extends('layouts.microsite')

@section('content')
@if ($type == 'corporation')
<h2>Loan Application for Corporation </h2>
@else
<h2>Loan Application for Sole Proprietor</h2>
@endif
<div class="card card-rounded">
    <div class="card-header bgm-blue"></div>
    <div class="card-body">
        <p class="text-center c-black"><strong>Select a product</strong></p>
        <hr>
        <div class="product-list">
            @foreach($products as $product)
            <div class="col-md-4 m-t-5 m-b-30">
                    <div class="col-md-12 b-top b-left b-bottom b-right">
                        <div class="row frame-responsive frame-responsive-16by9">
                            <img src="{{ asset('storage/products/' . $product->image )}}" class="item-image">
                        </div>
                        <div class="item-info">
                            <p><strong>{{ $product->name }}</strong></p>
                            <p>
                                <a href="{{ 
                                        route(
                                            'loans-application', 
                                            [
                                                'type' => $type, 
                                                'id' => $product->id
                                            ]
                                        ) 
                                    }}" 
                                    class="btn btn-round-side btn-sm">SELECT
                                </a>
                            </p>
                            <p class="c-semidarkgray">{!! str_limit($product->description, 100, "...") !!}</p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('otherJSLibrary')
@endsection