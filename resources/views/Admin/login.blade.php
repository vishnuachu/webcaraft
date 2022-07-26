<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Web and Craft</title>
    <meta property="og:title" content="The Rock" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="https://www.imdb.com/title/tt0117500/" />
    <meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" />

    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/starrr.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/isotope.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap-sweetalert/sweetalert.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

</head>

<body>
    <style>

    </style>
    <section>
        <div class="container-fluid p-0">
            <div class="row" style="height:auto;min-height:100vh">
                <div class="col-lg-12 col-md-12 app-entry-bg order-first set-bg" style="background-image:linear-gradient(rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.52)), url('{{ asset('image/login.jpeg') }}');">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4">
                                <div class="entry-form">
                                    <div class="col-12">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="qb-login-form">
                                                <div class="row">
                                                    <input type="hidden" name="from_store" value="1">
                                                    <div class="col-lg-12">
                                                        <div class="input-group d-flex align-items-center">
                                                            <i class="fa fa-envelope"></i>
                                                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" placeholder="Vendor email Id">
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert" style="color: red;">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-group d-flex align-items-center">
                                                            <i class="fa fa-key"></i>
                                                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********************">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert" style="color: red;">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="qb-btn submitForm w-100">Sign In</button>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        @if (\Session::has('invalid'))
                                                        <p style="width: 100%;background: #900;text-align: center;font-size: 13px;margin-top: 10px;color: #fff;" class="error">{!! \Session::get('invalid') !!}</p>
                                                        @endif
                                                        @if (\Session::has('approve'))
                                                        <p style="width: 100%;background: #900;text-align: center;font-size: 13px;margin-top: 10px;color: #fff;" class="error">{!! \Session::get('approve') !!}</p>
                                                        @endif
                                                        @if (\Session::has('error'))
                                                        <p style="width: 100%;background: #900;text-align: center;font-size: 13px;margin-top: 10px;color: #fff;" class="error">{!! \Session::get('error') !!}</p>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @if(Session::has('success'))
    <script>
        swal({
            title: 'Success!',
            text: 'User Registration Successful! Please Verify Your Email!',
            type: 'success',
            allowOutsideClick: false
        })
    </script>
    @endif

    @if(Session::has('warning'))
    <script>
        toastr.warning("{!! Session::get('warning') !!}");
    </script>
    @endif
    @if(Session::has('error'))
    <script>
        toastr.error("{!! Session::get('error') !!}");
    </script>
    @endif


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".success").fadeOut(5000);
            }, 3000);
            setTimeout(function() {
                $(".error").fadeOut(5000);
            }, 3000);
            setTimeout(function() {
                $(".invalid").fadeOut(5000);
            }, 3000);
            setTimeout(function() {
                $(".approve").fadeOut(5000);
            }, 3000);

        });
    </script>