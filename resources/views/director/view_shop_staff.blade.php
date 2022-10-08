@extends('layouts.website')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">View Shop Staff</h4>

                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th scope="col">Shop Name</th>
                            <th scope="col">Shop Work</th>
                            <th scope="col">Shop Worker Role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shopStaffs as $staff)
                            <tr>
                                <td>{{$staff->shop->name}}</td>
                                <td>{{$staff->user->name}}</td>
                                <td>{{$staff->user->role}}</td>
                                <td>
                                    <a href="{{ route('shopStaff.edit', [$staff->id]) }}" >Edit</a>
                                    <a href="{{ url('shopStaff/delete')}}/{{$staff->id}}">Delete</a>
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
