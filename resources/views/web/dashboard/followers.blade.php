@extends('delivery.layouts.app2')
@push('styles')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- Card Start -->
        @forelse ($followers as $item)
            <div class="card">
                <div class="d-flex">
                    <div class="d-flex justify-content-center align-items-center p-3">
                        <img  width="100" height="100" src="{{$item->user->profileLogo ? $item->user->profileLogo : asset('admin_files/img/default-avatar.png')}}" alt="">
                    </div>
                    <div >
                        <div class="card-block px-6 w-100" style="border-top: 0">
                            <h4 class="card-title font-weight-bold">{{$item->user->name}}</h4>
                            <p class="card-text mt-3">{{$item->user->about}}</p>
                            <a href="{{url('web_files')}}" class=" btn btn-primary btn-fill ">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-warning" role="alert">
                No followers
            </div>
        @endforelse
        <!-- End of card -->
    </div>
</div>
@endsection
