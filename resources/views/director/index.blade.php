@extends('layouts.website')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('director.sidebar')
            <div class="col-md-8">
                <div class="card mt-5">
                    <h3 class="text-center">
                        Director Dashboard
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
