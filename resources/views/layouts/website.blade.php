<!DOCTYPE html>
<html lang="en">
    <head>
        <title>University of Tasmania (UTAS) Canteen</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="{{asset(env('IMG_URL'). 'assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset(env('IMG_URL'). 'assets/css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset(env('IMG_URL'). 'assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset(env('IMG_URL'). 'assets/jquery/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset(env('IMG_URL'). 'assets/validate/jquery.validate.min.js')}}"></script>
         <script src="{{asset(env('IMG_URL'). 'assets/validate/additional-methods.min.js')}}"></script>
         <style>
            .main_div {
                /* margin: 0px;
                padding: 0px; */
            }
         </style>
        <style>
            .invalid-feedback {
                display: block!important;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid main_div">


       <section id="menu">
           @include('layouts.include.header')
       </header>
       @yield('content')

        <section id="footer">
            @include('layouts.include.footer')
        </section>
    </div>
        <script>
            $(document).ready(function () {
                $("#login-form").validate({
                    rules: {
                        uname: {
                            required: true,
                            minlength: 3,
                        },
                        password1: {
                            required: true,
                            minlength: 5,
                        },
                    },
                    messages: {
                        uname: {
                            required: "Please enter your user name",
                            minlength: "User name must be at least 3 characters",
                        },
                        password1: {
                            required: "Please enter your password",
                            minlength: "Password must be at least 6 characters",
                        },
                    },
                });
            });
        </script>
    </body>
</html>
