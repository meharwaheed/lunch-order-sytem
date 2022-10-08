@extends('layouts.website')

@section('content')
    <?php
    $roles = [
        ['name' => 'Director', 'value' => 'director'],
        ['name' => 'Manager', 'value' => 'manager'],
        ['name' => 'Shop Staff', 'value' => 'shop staff'],
        ['name' => 'User', 'value' => 'user'],
    ];
    $name = "Add New User";
    $action = route('users.store');
    if(isset($user)) {
        $name = "Edit User";
        $action = route('users.update', [$user->id]);
    }
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">{{$name}}</h4>
                    <form method="post" action="{{ $action }}">
                        @csrf
                        @if(isset($user))
                            @method('put')
                        @endif
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ @$user->name }}" class="form-control" required aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Email</label>
                            <input name="email" value="{{ @$user->email }}" type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Role</label>
                            <select name="role" class="form-select">
                                @foreach($roles as $role)
                                      <option value="{{ $role['value'] }}" @if(isset($user) and $user->role == $role['value']) selected @endif>{{$role['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
