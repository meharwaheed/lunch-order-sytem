@extends('layouts.website')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">View All Shops</h4>

                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Opening Time</th>
                            <th scope="col">Closing Time</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shops as $shop)
                            <tr>
                                <td>{{$shop->name}}</td>
                                <td>{{$shop->owner}}</td>
                                <td>{{$shop->open_time}}</td>
                                <td>{{$shop->close_time}}</td>
                                <td>
                                    <a href="{{ route('shops.edit', [$shop->id]) }}" >Edit</a>
                                    <a href="{{ url('shop/delete')}}/{{$shop->id}}">Delete</a>
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
