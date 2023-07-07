@extends('trader.layouts.app')
@push('styles')
@endpush
@section('content')

<div class="col-sm-12">
    <div class="card bg-c-red text-white widget-visitor-card">
        <div class="card-body text-center">
            <h2 class="text-white">{{ ($balance)?$balance->grand_total:"0" }} {{ currentCurrency() }}</h2>
            <h6 class="text-white">{{ trans('web.Grand Total') }}</h6>
            <i class="feather icon-credit-card"></i>
        </div>
    </div>
    <a href="{{ turl('wallets/create') }}" class="btn btn-primary"><i class="feather icon-credit-card"></i> {{ trans('web.Charge') }}</a>
    <hr>
</div>

<div class="col-12">
   <div class="table-responsive ">
    <table class="table table-hover table-striped table-borderd">
        <tbody>
            <tr class="bg-dark">
                <td class="text-light">money</td>
                <td class="text-light">details</td>
                <td class="text-light">date</td>
            </tr>
            @foreach ($wallets as $wallet)
                <tr>
                    <td class="{{ $wallet->operation == 1 ? 'text-success' : 'text-danger' }}">{{ $wallet->balance }} {{ currentCurrency() }}</td>
                    <td class="{{ $wallet->operation == 1 ? 'text-success' : 'text-danger' }}">{{ $wallet->description }}</td>
                    <td class="{{ $wallet->operation == 1 ? 'text-success' : 'text-danger' }}">{{ $wallet->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
