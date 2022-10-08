@extends('layouts.website')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">View All Users</h4>

                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('user/delete')}}/{{$user->id}}" class="btn btn-danger">Delete</a>
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
