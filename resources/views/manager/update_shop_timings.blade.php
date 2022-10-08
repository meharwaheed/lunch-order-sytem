@extends('layouts.website')

@section('content')
    <?php
    $name = "Add New Shop";
    $action = route('shops.store');
    if(isset($shop)) {
        $name = "Change Shop timings";
        $action = route('shoptime.update', [$shop->id]);
    }
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('manager.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">{{$name}}</h4>
                    <form method="post" action="{{ $action }}">
                        @csrf
                        @if(isset($shop))
                            @method('put')
                        @endif
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Shop Name</label>
                            <input type="text" disabled value="{{ @$shop->name }}" class="form-control" required aria-describedby="emailHelp">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Owner Name</label>
                            <input disabled value="{{ @$shop->owner }}" type="text" class="form-control" required>
                            @error('owner')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Shop Opening Time</label>
                            <input name="opening_time" value="{{ @$shop->opening_time }}" type="time" class="form-control" required>
                            @error('opening_time')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Shop Closing Time</label>
                            <input name="closing_time" value="{{ @$shop->closing_time }}" type="time" class="form-control" required>
                            @error('closing_time')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
