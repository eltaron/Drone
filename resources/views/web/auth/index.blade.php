@extends('web.layouts.authapp')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/auth.css">
@endpush
@section('content')
    <div class="container pt-4">
        <div class="row d-flex justify-content-around text-center align-items-center">
            <div class="col-lg-12 col-12 pb-3">
            <img width="150px" src="{{asset('web_files')}}/images/logow.png" class="image-fluid" alt="Logo"/>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8 col-12 list">
            <ul class="w-100 mb-1 d-flex text-center align-items-center list-unstyled">
                <a id="login" class="col-lg-6 col-6 pb-3 pt-3 pe-4 ps-4 login active" href="#login">
                <li>Login</li>
                </a>
                <a id="reg" class="col-lg-6 col-6 pb-3 pt-3 pe-4 ps-4 reg" href="#register">
                <li>Register</li>
                </a>
            </ul>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    <div id="reg_head" class="container d-none text-center reg-head">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-lg-8 col-12 list p-0">
            <ul class="d-flex justify-content-center align-items-center list-unstyled m-0">
                <li class="col user">
                <button class="w-100 h-100" onclick="showm('showuser')">
                    User
                </button>
                </li>
                <li class="col trader">
                <button class="w-100 h-100" onclick="showm('showtrader')">
                    Trader
                </button>
                </li>
                <li class="col delivery">
                <button class="w-100 h-100" onclick="showm('showdelivery')">
                    Delivery
                </button>
                </li>
            </ul>
            </div>
            <div class="col-lg-12 p-0">
            <div class="d-block" id="showuser">
                <div class="row">
                <div class="col-2"></div>
                <div class="col-12 col-lg-8 p-0">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 pe-0 pe-md-2">
                            <input class="maininput" name="username" type="text" placeholder="USER NAME"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pe-0 pe-md-2">
                            <input class="maininput" name="phone" type="text" placeholder="PHONE NAME"/>
                            </div>
                            <div class="col-md-6 ps-0 ps-md-2">
                            <input class="maininput" type="email" name="email" placeholder="E_MAIL"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pe-0 pe-md-2">
                                <input class="maininput" type="password" name="password" placeholder="PASSWORD"/>
                                </div>
                            <div class="col-md-6 ps-0 ps-md-2">
                                <input class="maininput" type="password" name="rpassword" placeholder="reset PASSWORD"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pe-0 pe-md-2">
                                <select class="maininput" id="country" aria-label="Default select example">
                                    <option disabled selected>Choose Country</option>
                                    @foreach (countries() as $country)
                                        <option value="{{ $country->id }}">
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 ps-0 ps-md-2">
                                <select class="maininput" name="city" id="city">
                                    <option disabled selected>Choose City</option>
                                </select>
                            </div>
                        </div>
                        <button class="mainbutton mb-4" type="submit">
                            REGISTER
                        </button>
                    </form>
                </div>
                </div>
            </div>
            <div class="d-none" id="showtrader">
                <div class="row">
                <div class="col-2"></div>
                <div class="col-12 col-lg-8 p-0">
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="COMPANY NAME"/>
                        </div>
                        <div class="col-md-6 ps-0 ps-md-2">
                        <input class="maininput" type="text" placeholder="E_MAIL"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="PHONE NAME"/>
                        </div>
                        <div class="col-md-4 ps-0 ps-md-2 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="CITY" />
                        </div>
                        <div class="col-md-4 ps-0 ps-md-2">
                        <input class="maininput" type="text" placeholder="PASSWORD"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="ADDRESS 1"/>
                        </div>
                        <div class="col-md-6 ps-0 ps-md-2">
                        <input class="maininput" type="text" placeholder="ADDRESS 2"/>
                        </div>
                    </div>
                    <button class="mainbutton mb-4" type="submit">
                        REGISTER
                    </button>
                    </form>
                </div>
                </div>
            </div>
            <div class="d-none" id="showdelivery">
                <div class="row">
                <div class="col-2"></div>
                <div class="col-12 col-lg-8 p-0">
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="COMPANY NAME"/>
                        </div>
                        <div class="col-md-6 ps-0 ps-md-2">
                        <input class="maininput" type="text" placeholder="E_MAIL"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="PHONE NAME"/>
                        </div>
                        <div class="col-md-4 ps-0 ps-md-2 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="CITY" />
                        </div>
                        <div class="col-md-4 ps-0 ps-md-2">
                        <input class="maininput" type="text" placeholder="PASSWORD"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pe-0 pe-md-2">
                        <input class="maininput" type="text" placeholder="ADDRESS 1"/>
                        </div>
                        <div class="col-md-6 ps-0 ps-md-2">
                        <input class="maininput" type="text" placeholder="ADDRESS 2"/>
                        </div>
                    </div>
                    <button class="mainbutton mb-4" type="submit">
                        REGISTER
                    </button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div id="log-head" class="container d-block text-center log-head">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-lg-8 col-12 list p-0">
            <ul class="text-center p-0 m-0">
                <li class="fs-5 mainli"><h2>Welcome Back To CropCopter</h2></li>
            </ul>
            </div>
            <div class="col-lg-12">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-lg-8 col-12">
                <form action="" method="post">
                    <input class="maininput" type="text" placeholder="E-MAIL" />
                    <input class="maininput" type="text" placeholder="PASSWORD" />
                    <button class="mainbutton" type="submit">Login</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{asset('web_files')}}/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $('#country').change(function() {
                    var countryID = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: "{{ url('/cities') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            _token: "{{ csrf_token() }}",
                            'country_id': countryID,
                        },
                        beforeSend: function() {
                            $('#city').empty();
                            $('#number').empty();
                        },
                        success: function(msg) {
                            for (var i = 0; i <= msg.cities.length; i++) {
                                $('#city').append("<option value='" + msg.cities[i].id + "'>" + msg
                                    .cities[i].name + "</option>");
                            }
                        }
                    });
                });
            });

        </script>
    @endpush
@endsection
