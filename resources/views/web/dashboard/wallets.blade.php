@extends('delivery.layouts.app2')
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
                            <h4 class="card-title font-weight-bold ml-3">Total Money : {{ ($balance)?$balance->grand_total:"0" }} {{ currentCurrency() }} </h4>
                            <div class="justify-content-end mr-4">
                                <a href="#" class="btn btn-primary btn-fill mx-3" data-toggle="modal" data-target="#addModal">Charge wallet</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <td>money</td>
                                <td>details</td>
                                <td>date</td>
                            </thead>
                            <tbody>
                                @forelse ($wallets as $wallet)
                                    <tr>
                                        <td class="{{ $wallet->operation == 1 ? 'text-success' : 'text-danger' }}">{{ $wallet->balance }} {{ currentCurrency() }}</td>
                                        <td class="{{ $wallet->operation == 1 ? 'text-success' : 'text-danger' }}">{{ $wallet->description }}</td>
                                        <td class="{{ $wallet->operation == 1 ? 'text-success' : 'text-danger' }}">{{ $wallet->time_ago }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No data</td>
                                        <td></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('payment')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div>
                        <label>Amount</label>
                        <input type="number" name="amount" class="form-control" required placeholder="Amount"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Charge wallett</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
