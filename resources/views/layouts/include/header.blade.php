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
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/register')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/login')}}">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Restaurant's Menu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="shop1.php">Lazenbys</a></li>
                                <li><a class="dropdown-item" href="shop2.php">The Ref</a></li>
                                <li><a class="dropdown-item" href="shop3.php">Loose Goose</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="foods.php">Master Foods</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
