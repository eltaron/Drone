@extends('trader.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="row d-flex align-items-center justify-content-between">
                            <h4 class="card-title font-weight-bold ml-3">All Products</h4>
                            <div class="justify-content-end mr-4">
                                <a href="#" class="btn btn-primary btn-fill mx-3">Add Product</a>
                                <a href="#" class="btn btn-warning btn-fill mr-5">Remove Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="width: 19rem;">
                                    <img src="{{asset('admin_files')}}/img/23.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Product Name</h5>
                                        <h6 class="card-subtitle mt-2 text-muted">Product Price</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                            <a href="#" class="btn btn-primary">Edit Product</a>
                                            <a href="#" class="btn btn-warning">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width: 19rem;">
                                    <img src="{{asset('admin_files')}}/img/23.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Product Name</h5>
                                        <h6 class="card-subtitle mt-2 text-muted">Product Price</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                            <a href="#" class="btn btn-primary">Edit Product</a>
                                            <a href="#" class="btn btn-warning">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width: 19rem;">
                                    <img src="{{asset('admin_files')}}/img/23.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Product Name</h5>
                                        <h6 class="card-subtitle mt-2 text-muted">Product Price</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                            <a href="#" class="btn btn-primary">Edit Product</a>
                                            <a href="#" class="btn btn-warning">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width: 19rem;">
                                    <img src="{{asset('admin_files')}}/img/23.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Product Name</h5>
                                        <h6 class="card-subtitle mt-2 text-muted">Product Price</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                            <a href="#" class="btn btn-primary">Edit Product</a>
                                            <a href="#" class="btn btn-warning">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width: 19rem;">
                                    <img src="{{asset('admin_files')}}/img/23.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Product Name</h5>
                                        <h6 class="card-subtitle mt-2 text-muted">Product Price</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                            <a href="#" class="btn btn-primary">Edit Product</a>
                                            <a href="#" class="btn btn-warning">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width: 19rem;">
                                    <img src="{{asset('admin_files')}}/img/23.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Product Name</h5>
                                        <h6 class="card-subtitle mt-2 text-muted">Product Price</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                            <a href="#" class="btn btn-primary">Edit Product</a>
                                            <a href="#" class="btn btn-warning">Remove</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

