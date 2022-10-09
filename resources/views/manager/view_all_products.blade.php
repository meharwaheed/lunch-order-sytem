@extends('layouts.website')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('manager.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">View All Products</h4>
                    @if(session()->has('message'))
                        <div class="alert alert-danger" role="alert">
                            {{session()->get('message')}}
                        </div>
                    @endif
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img  width="100" src="{{$product->image}}"></td>
                                <td>{{$product->title}}</td>
                                <td>${{$product->price}}</td>
                                <td>
                                    <a href="{{ route('addToMenu', [$product->id]) }}" >Add to Menu</a>
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
