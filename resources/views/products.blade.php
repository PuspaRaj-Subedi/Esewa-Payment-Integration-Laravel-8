@extends('layouts/master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-success text-center text-uppercase my-5">All products in our store</h3>


            <div class="card-group">
                <?php

                $i = 0;?>
                  @foreach ($products as $product)
                <div class="card">
                <img class="card-img-top" src="{{asset('image1.jpg')}}" alt="product1">

                    <div class="card-body">
                    <h5 class="card-title text-center">{{$product->title}}</h5>
                        <p class="card-text text-muted">{{$product->description}}</p>

                        <h4 class="card-text text-center">
                        <span class="badge badge-success"><sup>$</sup>{{ $product->amount}}</span>

                    </h4>

                    </div>

                    <div class="card-footer text-center">
                     <form action="{{route('checkout')}}" method="post" class="d-inline">
                        @csrf
                         <input type="hidden" name="product_id" value="{{$product->id}}">
                         <input type="submit" name="Checkout" value="Buy Now">
                    </form>
                     </div>
                     </div>
                     <?php  $i++;?>
                     @if($i%3 == 0)
                     </div><div class="card-group mt-5">
                    @endif
                     @endforeach
                </div>

        </div>
        </div>
    </div>
</div>
@endsection
