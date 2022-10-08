@extends('layouts.website')

@section('content')
    <?php
    $name = "Assign Shop To Staff";
    $action = route('shopStaff.store');
    if(isset($shopWorker)) {
        $name = "Update Staff";
        $action = route('shopStaff.update', [$shopWorker->id]);
    }
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">{{$name}}</h4>
                    @if(session()->has('message'))
                        <div class="alert alert-danger" role="alert">
                            {{session()->get('message')}}
                        </div>
                    @endif
                    <form method="post" action="{{ $action }}">
                        @csrf
                        @if(isset($shopWorker))
                            @method('put')
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Select User</label>
                            <select name="user_id" class="form-select">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" @if(isset($shopWorker) and $shopWorker->user_id == $user->id) selected @endif>{{$user->name}} ({{$user->role}})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Shop</label>
                            <select name="shop_id" class="form-select">
                                @foreach($shops as $shop)
                                    <option value="{{ $shop->id }}" @if(isset($shopWorker) and $shopWorker->shop_id == $shop->id) selected @endif>{{$shop->name}}</option>
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
