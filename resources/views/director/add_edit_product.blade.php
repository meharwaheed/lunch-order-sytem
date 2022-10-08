@extends('layouts.website')

@section('content')
    <?php
    $name = "Add New Product";
    $action = route('products.store');
    if(isset($product)) {
        $name = "Edit Product";
        $action = route('products.update', [$product->id]);
    }
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <h4 class="text-center">{{$name}}</h4>
                    <form method="post" action="{{ $action }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($product))
                            @method('put')
                        @endif
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Title</label>
                            <input type="text" name="title" value="{{ @$product->title }}" class="form-control" required aria-describedby="emailHelp">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Price</label>
                            <input name="price" value="{{ @$product->price }}" type="text" class="form-control" required>
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Image</label>
                            <input name="image" type="file" class="form-control">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Description</label>
                            <input name="description" value="{{ @$product->description }}" type="textarea" class="form-control" required>
                            @error('description')
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
