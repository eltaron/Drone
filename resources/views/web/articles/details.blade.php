@extends('web.layouts.contentapp')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/articleDetails.css">
@endpush
@section('content')
<main>
    <div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <div class="item">
            <div class="row">
            <div class="col-2 col-md-1">
                <img class="avatar" src="{{asset('web_files')}}/images/1.jpg" alt="" />
            </div>
            <div class="col-10 col-md-11">
                <h3 class="name">{{$article->user->name}}</h3>
                <h4 class="desc">{{$article->user->about}}</h4>
            </div>
            {{-- <div class="col-1 text-right">
                <div class="dropdown">
                <button
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <i class="fa-solid fa-ellipsis-vertical lg"></i>
                </button>
                <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                >
                    <li>
                    <a class="dropdown-item" href="#">Share Article</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Show More</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Show Less</a></li>
                    <li>
                    <a class="dropdown-item" href="#">Report Article</a>
                    </li>
                </ul>
                </div>
            </div> --}}
            </div>
            <div class="row">
            <img class="pic" src="{{$article->image->url}}" alt="" />
            <h2>{{$article->title}}</h2>
            <p class="content">
                {{$article->description}}
            </p>
            <hr class="d-none d-md-block" />
            </div>
            <div class="row article-foot d-flex justify-content-between">
            <div class="col-12 col-md-4">{{$article->time_ago}}</div>
            <div class="col-12 col-md-8 text-end">
                <span class="rate fs-5">
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
                </span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</main>
@endsection
