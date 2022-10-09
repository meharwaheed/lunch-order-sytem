@extends('layouts.website')

@section('content')
    <style>
        .banner-img {
            height: 490px;
            width: 97.15vw;
        }
        .card {
            width: 36rem;
            margin: 0px;
            padding: 0px;
        }
    </style>
<div class="container-fluid p-0 m-0">
    <img class="banner-img" src="{{ asset('assets/images/homeImage.jpeg') }}"  class="img-thumbnail" alt="">
</div>
        <section>
            <div class="row py-3">
                <h1 class="py-3 text-center">Welcome to {{ $shop->name }}
                </h1>
                <h3 class="text-center">                    Available Balance ${{ auth()->user()->balance }}
                </h3>
            </div>
            <div class="row py-5">
                <div class="col-1"></div>
                <div class="col-10 mb-3">
                    <div class="row">
                        <div class="col fs-4 text-start">Open Time : {{ $shop->open_time }}</div>
                        <div class="col fs-4 text-end">Close Time : {{ $shop->close_time }}</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="card">
                            <div class="pt-2">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong> {{session('success')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                            <div class="pt-2">
                                @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> {{session('error')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                            <img src="{{$product->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <h5 class="card-title">Price  ${{ $product->price }}</h5>
                                <form method="post" action="{{ route('orderNow') }}">
                                    @csrf
                                    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Enter Quantity</span>
                                        <input type="number" name="qty" min="1" class="form-control" aria-label="Sizing example input" required placeholder="eg. 5" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <button class="btn btn-primary d-block m-auto">Place Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
