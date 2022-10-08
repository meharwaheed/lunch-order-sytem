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
                            <th scope="col">Open Time</th>
                            <th scope="col">Close Time</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shopTime as $product)
                            <tr>
                                <td>{{$product->open_time}}</td>
                                <td>{{$product->close_time}}</td>
                                <td>
                                    <a href="{{ route('shoptime.edit', [$product->id]) }}" >Edit Timings</a>
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
