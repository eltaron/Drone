@extends('delivery.layouts.app')
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
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{ $order->user->name  }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->code }}</td>
                                        <td>{{ $order->time_ago }}</td>
                                        <td>
                                            <a href="#" data-id="{{$order->id}}" class="btn btn-dark mr-2 delete_order">Remove Order</a>
                                            <a href="#" data-id="{{$order->id}}" class="btn btn-dark mr-2 change_status">Change Status</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No data</td>
                                        <td></td>
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
<div class="modal fade" id="delete_order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('orders/destroy')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="order_id" id="order_id">
                    <h2>Are you shure you want to delete this order ?</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Delete Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="change_status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('orders/status')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="order_id" id="order_id2">
                    <h2>Choose Status</h2>
                    <div class="form-group">
                        <select id="inputState" name="status" class="form-control" required>
                            <option selected disabled>Choose Status</option>
                            <option value="preparation">preparation</option>
                            <option value="in_route">in route</option>
                            <option value="completed">completed</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Choose Status</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $(".delete_order").click(function() {
            var id = $(this).attr('data-id');
            $("#order_id").val(id);
            $("#delete_order").modal('toggle');
        });
        $(".change_status").click(function() {
            var id = $(this).attr('data-id');
            $("#order_id2").val(id);
            $("#change_status").modal('toggle');
        });
    });
</script>
@endpush
@endsection

