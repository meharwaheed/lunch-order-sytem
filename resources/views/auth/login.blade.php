@extends('layouts.website')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
                    <form id="login-form">
                        <div class="mb-3">
                            <label for="uname" class="form-label">UTAS Id</label>
                            <input type="text" class="form-control" name="uname" id="uname"
                            placeholder="US12345" />
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password1" id="password1"
                            placeholder="*******" />
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
