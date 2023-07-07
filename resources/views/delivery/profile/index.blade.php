@extends('trader.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{turl('profile')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="card-title font-weight-bold">Store Details</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Store Name</label>
                                        <input type="text" class="form-control" name="store_name" placeholder="Store Name" value="{{Auth::user()->store->store_name !=Auth::user()->name ? Auth::user()->store->store_name : '' }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3" style="flex-wrap: wrap;">
                                        <label class="w-100">Store Logo</label>
                                        <input type="file" name="logo" class="form-control w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Store Address</label>
                                        <textarea class="form-control" name="address" placeholder="Store Address" rows="5" style="height: auto">{{Auth::user()->store->address}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Google Map Location</label>
                                        <textarea class="form-control" name="google" placeholder="Google Map Location" rows="5" style="height: auto">{{Auth::user()->store->google}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-md-1">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" class="form-control" placeholder="Company" value="{{Auth::user()->store->facebook}}">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-md-1 pl-md-1">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" class="form-control" placeholder="Last Name" value="{{Auth::user()->store->twitter}}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-md-1">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" class="form-control" placeholder="Last Name" value="{{Auth::user()->store->instagram}}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="card-title font-weight-bold">Profile Details</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" required class="form-control" placeholder="Username" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ps-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" name="mobile" placeholder="Phone Number" value="{{Auth::user()->mobile}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-row ml-0 mr-0 mb-3">
                                <div class="col-md-6 pl-0 pr-md-1 pr-0">
                                    <label>Choose Country</label>
                                    <select  class="custom-select w-100 rounded-0" id="country" aria-label="Default select example" >
                                        <option disabled selected>Choose Country</option>
                                        @foreach (countries() as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 pr-0 pl-0 pl-md-1">
                                    <label>Choose City</label>
                                    <select  class="custom-select w-100 rounded-0" name="city" id="city">
                                        <option disabled selected>Choose City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea class="form-control" name="about" placeholder="About Me" rows="5" style="height: auto">{{Auth::user()->about}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-fill pull-right">Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="{{asset('admin_files')}}/img/1.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{Auth::user()->store->logo ? Auth::user()->store->logo : asset('admin_files/img/default-avatar.png')}}" alt="...">
                                <h5 class="title">{{Auth::user()->store->store_name}}</h5>
                            </a>
                            <p class="description">{{Auth::user()->store->store_Code}}</p>
                        </div>
                        <p class="description text-center">{{Auth::user()->about}}</p>
                    </div>
                    <hr>
                    <div class="button-container mr-auto ml-auto">
                        <button href="{{Auth::user()->store->facebook}}" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-facebook-square"></i>
                        </button>
                        <button href="{{Auth::user()->store->twitter}}" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-twitter"></i>
                        </button>
                        <button href="{{Auth::user()->store->instagram}}" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-instagram"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
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
