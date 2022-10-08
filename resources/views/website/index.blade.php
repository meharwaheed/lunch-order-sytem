@extends('layouts.website')

@section('content')
    <style>
        .img-banner {
            width: 97.15vw;
            height: 500px;
        }
    </style>
<div class="container-fluid p-0 m-0">
    <img class="img-banner" src="{{ asset('assets/images/header_img.webp') }}"  class="img-thumbnail" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mt-5">Shop Links</h3>
        </div>
        @foreach($shops as $shop)
            <div class="col-md-4">
                <div class="card mt-2 m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $shop->name }}</h5>
                        <center>
                            <a href="{{ url('menu') }}/{{$shop->id}}" class="text-center">Buy Products</a>

                        </center>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
