@extends('delivery.layouts.app')
@push('styles')
@endpush
@section('content')
    <!-- Main -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="counter-box colored">
                        <i class="fa fa-user"></i>
                        <span class="counter">{{$ordersCount}}</span>
                        <p>Orders Count</p>
                    </div>
                    <div class="counter-box">
                        <i class="fa fa-exchange"></i>
                        <span class="counter">{{$wallet}}</span>
                        <p>Total Money</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card ">
                        <input type="hidden" id="m1" value="{{$orderArr[1]}}">
                        <input type="hidden" id="m2" value="{{$orderArr[2]}}">
                        <input type="hidden" id="m3" value="{{$orderArr[3]}}">
                        <input type="hidden" id="m4" value="{{$orderArr[4]}}">
                        <input type="hidden" id="m5" value="{{$orderArr[5]}}">
                        <input type="hidden" id="m6" value="{{$orderArr[6]}}">
                        <input type="hidden" id="m7" value="{{$orderArr[7]}}">
                        <input type="hidden" id="m8" value="{{$orderArr[8]}}">
                        <input type="hidden" id="m9" value="{{$orderArr[9]}}">
                        <input type="hidden" id="m10" value="{{$orderArr[10]}}">
                        <input type="hidden" id="m11" value="{{$orderArr[11]}}">
                        <input type="hidden" id="m12" value="{{$orderArr[12]}}">
                        <div class="card-header ">
                            <h4 class="card-title">Orders</h4>
                            <p class="card-category">All Orders</p>
                        </div>
                        <div class="card-body ">
                            <div id="chartActivity" class="ct-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Wallet</h4>
                            <p class="card-category">latest transactions</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Balance</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                </thead>
                                <tbody>
                                    @forelse ($wallets as $wallet)
                                        <tr>
                                            <td>{{$wallet->id}}</td>
                                            <td>{{$wallet->balance}}</td>
                                            <td>{{$wallet->description_en}}</td>
                                            <td>{{$wallet->time_ago}}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No data</td>
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
                <div class="col-md-6">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Orders</h4>
                            <p class="card-category">Latest orders</p>
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
    <!-- Control Center for Dashboard: scripts for the example pages etc -->
    <script src="{{asset('admin_files')}}/js/dashboard.js " type="text/javascript"></script>
    <!-- Dashboard  -->
    <script src="{{asset('admin_files')}}/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>
    <!--  Chartist Plugin  -->
    <script src="{{asset('admin_files')}}/js/plugins/chartist.min.js"></script>
@endpush
@endsection
