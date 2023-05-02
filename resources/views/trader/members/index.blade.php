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
                            <h4 class="card-title font-weight-bold ml-3">All Members</h4>
                            <div class="justify-content-end">
                                <a href="#" class="btn btn-primary btn-fill mx-3">Add Member</a>
                                <a href="#" class="btn btn-warning btn-fill mr-3">Remove Member</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>User</td>
                                    <td>ae@ae.com</td>
                                    <td>01111111111</td>
                                    <td>Elmahalla Elkubra , Gharbia</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Delivery</td>
                                    <td>ae@ae.com</td>
                                    <td>01111111111</td>
                                    <td>Elmahalla Elkubra , Gharbia</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>User</td>
                                    <td>ae@ae.com</td>
                                    <td>01111111111</td>
                                    <td>Elmahalla Elkubra , Gharbia</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Trader</td>
                                    <td>ae@ae.com</td>
                                    <td>01111111111</td>
                                    <td>Elmahalla Elkubra , Gharbia</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>User</td>
                                    <td>ae@ae.com</td>
                                    <td>01111111111</td>
                                    <td>Elmahalla Elkubra , Gharbia</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Abdelrhman Elnhas</td>
                                    <td>Trader</td>
                                    <td>ae@ae.com</td>
                                    <td>01111111111</td>
                                    <td>Elmahalla Elkubra , Gharbia</td>
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
