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
                            <h4 class="card-title font-weight-bold ml-3">All Orders</h4>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Code</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{ $order->user->name  }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->code }}</td>
                                        <td>{{ $order->time_ago }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No data</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
@push('scripts')

@endpush
@endsection

