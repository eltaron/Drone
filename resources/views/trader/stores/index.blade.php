@extends('trader.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row d-flex align-items-center justify-content-between">
                            <h4 class="card-title font-weight-bold ml-3">All Stores</h4>
                            <div class="justify-content-end">
                                <a href="#" class="btn btn-primary btn-fill mx-3">Add Store</a>
                                <a href="#" class="btn btn-warning btn-fill mr-3">Remove Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Store Name</th>
                                <th>Owner Name</th>
                                <th>Category</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Location</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>AE</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Fertilizers & Peticides</td>
                                    <td>01111111111</td>
                                    <td>ae@ae.com</td>
                                    <td>Elmahalla Elkubra</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>AE</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Fertilizers & Peticides</td>
                                    <td>01111111111</td>
                                    <td>ae@ae.com</td>
                                    <td>Elmahalla Elkubra</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>AE</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Fertilizers & Peticides</td>
                                    <td>01111111111</td>
                                    <td>ae@ae.com</td>
                                    <td>Elmahalla Elkubra</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>AE</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Fertilizers & Peticides</td>
                                    <td>01111111111</td>
                                    <td>ae@ae.com</td>
                                    <td>Elmahalla Elkubra</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>AE</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Fertilizers & Peticides</td>
                                    <td>01111111111</td>
                                    <td>ae@ae.com</td>
                                    <td>Elmahalla Elkubra</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>AE</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Fertilizers & Peticides</td>
                                    <td>01111111111</td>
                                    <td>ae@ae.com</td>
                                    <td>Elmahalla Elkubra</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
