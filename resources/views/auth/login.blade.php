@extends('layouts.website')

@section('content')
    <style>
        .invalid-feedback {
            display: block!important;
        }
    </style>

<section>
    <div class="row py-3">
        <h1 class="py-3 text-center">UTAS Lunch Ordering System</h1>
    </div>

    <div class="row py-5">

        <div class="col-2">
        <a href="shop1.php">
        <img class="img-fluid" style="height: 100%" src="{{asset(env('IMG_URL'). 'assets/images/Lazenbys.png')}}" alt="" />
        </a>
        </div>

        <div class="col-2">
            <a href="shop2.php">
        <img class="img-fluid" style="height: 100%" src="{{asset(env('IMG_URL'). 'assets/images/the ref.jpg')}}" alt="" />
        </a>

        </div>
         <div class="col-2">
             <a href="shop3.php">
        <img class="img-fluid" style="height: 100%" src="{{asset(env('IMG_URL'). 'assets/images/looseGoose.jpg')}}" alt="" />
             </a>
         </div>



        <div class="col-5">

            <div class="card">
                <div class="card-body" style="background-color: #e6eeff;">
                    <h5 class="card-title text-center">Login to continue</h5>
                    <form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="uname" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="uname"
                            placeholder="test@utas.com" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password1"
                            placeholder="*******" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check1" />
                            <label class="form-check-label" for="check1">Sign in me</label>
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="register.php">New User?</a>

                         </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="col-1"></div> --}}
    </div>
</section>
@endsection
