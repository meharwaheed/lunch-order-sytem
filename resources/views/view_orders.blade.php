@extends('layouts.website')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            @include($include)
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">{{ $title }}</h4>
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <table class="table table-hover ">
                        <thead>
                        <tr>

                            <th scope="col">Product Image</th>
                            <th scope="col">OrderId</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Product</th>
                            <th scope="col">Shop</th>
                            <th scope="col">User</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td><img  width="100" src="{{asset('storage/'.$order->product->image)}}"></td>
                                <td>{{$order->ref_id}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>${{$order->price}}</td>
                                <td>${{$order->discount}}</td>
                                <td>{{$order->product->title}}</td>
                                <td>{{$order->shop->name}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
