<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        header {
            position: relative;
            background-color: black;
            height: 100vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        header .container {
            position: relative;
            z-index: 2;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

    </style>
    <title>AMTI</title>
</head>

<body>

    <header>

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('vid/main-loop.mp4') }}" type="video/mp4">
        </video>

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 align-items-center">
                <div class="w-100 text-dark">

                    <div class="d-flex justify-content-center">
                        <div class="text-white  p-5" style="width: 30rem;">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <center><img src="{{ asset('img/logo-amti.png') }}"
                                        class="w-80 h-30 fill-current text-gray-500"></center>


                                <br>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />


                                <div class="mb-3 mt-4">
                                    <label for="exampleInputEmail1" class="form-label">Correo
                                        electrónico:</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ old('password') }}">
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-end"
                                            @if (Route::has('password.request')) <a></a>
                                            <a class="underline text-light"  href="{{ route('password.request') }}"> {{ __('¿Has olvidado tu contraseña?') }}</a> @endif
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-end">
                                                <x-button class="ml-3 btn btn-outline-dark ml-2">
                                                    {{ __('Log in') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </header>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
