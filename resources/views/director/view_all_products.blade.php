@extends('layouts.website')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">View All Products</h4>

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
                                <td><img  width="100" src="{{asset('storage/'.$product->image)}}"></td>
                                <td>{{$product->title}}</td>
                                <td>${{$product->price}}</td>
                                <td>
                                    <a href="{{ route('products.edit', [$product->id]) }}" >Edit</a>
                                    <a href="{{ url('product/delete')}}/{{$product->id}}">Delete</a>
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
