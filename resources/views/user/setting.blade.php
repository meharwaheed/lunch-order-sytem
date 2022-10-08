@extends('layouts.website')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('user.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <div class="col-md-12 px-2">
                        <h3 class="text-center">Update Your Profile</h3>
                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{session('message')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{session('error')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <div class="panel panel-default credit-card-box">
                        <form action="{{route('updateSetting')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" value="{{$user->name}}" name="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" name="email" value="{{$user->email}}" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label for="name">Old Password</label>
                                        <input type="text" name="old_password" placeholder="Old Password" class="form-control @error('old_password') is-invalid @enderror">
                                        @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label for="name">New Password</label>
                                        <input type="text" name="password" placeholder="password" class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label for="name">Confirm Password</label>
                                        <input type="text" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-3 float-end">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
