@extends('layouts.website')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('manager.sidebar')
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
                        @foreach($shop->products as $product)
                            <tr>
                                <td><img  width="100" src="{{asset('storage/'.$product->image)}}"></td>
                                <td class="align-middle">{{$product->title}}</td>
                                <td class="align-middle">${{$product->price}}</td>
                                <td class="align-middle">
                                    <a  href="{{ url('removeFromMenu')}}/{{$product->id}}">Remove from Menu</a>
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
