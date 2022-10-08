@extends('layouts.website')

@section('content')
    <style>
        .banner-img {
            height: 490px;
            width: 97.15vw;
        }
    </style>
<div class="container-fluid p-0 m-0">
    <img class="banner-img" src="{{ asset('assets/images/homeImage.jpeg') }}"  class="img-thumbnail" alt="">
</div>
        <section>
            <div class="row py-3">
                <h1 class="py-3 text-center">Welcome to {{ $shop->name }} </h1>
            </div>
            <div class="row py-5">
                <div class="col-1"></div>
                <div class="col-10 mb-3">
                    <div class="row">
                        <div class="col fs-4 text-start">Open Time : {{ $shop->open_time }}</div>
                        <div class="col fs-4 text-end">Close Time : {{ $shop->close_time }}</div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Sr No</th>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">Buy</th>
                            <th scope="col" class="text-center">Thumbnail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shop->products as $product)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $product->title }}</td>
                            <td>${{$product->price}}</td>
                            <td class="align-middle" style="width: 200px">
                                <a href="{{ url('buy-product') }}/{{ $product->id }}/{{$shop->id}}" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </td>
                            <td> <img src="{{asset('storage/'.$product->image)}}"  class="img-thumbnail" alt=""></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-3"></div>
        </section>
@endsection
