<?php
$shops = \App\Models\Shop::all();
?>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">UTAS Canteen</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        @if(auth()->check())
                            <?php
                                $route = url('/home');

                            if(auth()->user()->role == 'director') {
                                $route = url('/home');
                            } elseif(auth()->user()->role == 'manager') {
                                    $route = url('/menu_management');
                                }
                            elseif(auth()->user()->role == 'user') {
                                $route = url('/account');
                            }
                                ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ $route }}">Dashboard</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="{{ url('logout') }}">Logout</a>
                        </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/register')}}">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/login')}}">Login</a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Restaurant's Menu</a>
                            <ul class="dropdown-menu">
                                @foreach($shops as $shop)
                                    <li><a class="dropdown-item" href="{{ url('menu') }}/{{ $shop->id }}">{{ $shop->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @if(auth()->check())
                            <li class="nav-item">

                            @if(auth()->user()->role == 'manager')
                                    <a class="nav-link active" href="{{ url('/menu_management') }}">Master Foods</a>
                                @elseif(auth()->user()->role == 'director')
                                    <a class="nav-link active" href="{{ route('products.index') }}">Master Foods</a>
                                @endif
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
