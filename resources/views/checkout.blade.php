@extends('layouts/master')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6 mt-5">
            <div class="card">
                <img class="card-img-top" src="{{asset('image1.jpg')}}" alt="product1">
                <div class="card-group">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$product->title}}</h5>
                            <p class="card-text text-muted">{{$product->description}}</p>
                            <h4 class="card-text text-center">
                            <span class="badge badge-success"><sup>$</sup>{{ $product->amount}}</span>
                        </h4>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="card">
                <h3> Pay With Esewa</h3>
                <div class="card-group">
                    <div class="card-body">
                        <form action="https://uat.esewa.com.np/epay/main" method="POST">
                        <input value="{{$product->amount}}" name="tAmt" type="hidden">
                            <input value="{{$product->amount}}" name="amt" type="hidden">
                            <input value="0" name="txAmt" type="hidden">
                            <input value="0" name="psc" type="hidden">
                            <input value="0" name="pdc" type="hidden">
                            <input value="epay_payment" name="scd" type="hidden">
                            <input value="{{$order->invoice_no}}" name="oid" type="hidden">
                            <input value="{{route('esewa.sucess')}}" type="hidden" name="su">
                            <input value="{{route('esewa.failure')}}" type="hidden" name="fu">
                            <input src="{{asset('esewa.png')}}" type="image" alt="submit" style="height:29px; Width:auto;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
