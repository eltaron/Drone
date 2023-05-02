@extends('web.layouts.contentapp')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/posts.css">
@endpush
@section('content')
<main>
    <div class="container">
    <div class="row">
        <div class="col-12 widthfilter">
        <a href="#">
            <h2 class="filter fs-6">
            <i class="fa-solid fa-filter"></i> Filter
            </h2>
        </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="item">
            <div class="row">
                <div class="col-2 col-md-1">
                <img class="avatar" src="{{asset('web_files')}}/images/1.jpg" alt="" />
                </div>
                <div class="col-9 col-md-10">
                <h3 class="name">Ahmed mohamed</h3>
                <h4 class="desc">web developer</h4>
                </div>
                <div class="col-1">
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
                        <a class="dropdown-item" href="#">Show More</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Show Less</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Hide Post</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <p class="content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Rem illo, doloremque porro nemo accusantium nesciunt
                consectetur non iusto quos quasi fugiat aspernatur. Fugiat
                velit sequi ex quas nisi inventore blanditiis?
                </p>
                <hr class="d-none d-md-block" />
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                <ul class="inter_count">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> 20K
                    </li>
                    <li>
                    <span><i class="fa-solid fa-comment"></i></span> 110
                    </li>
                </ul>
                </div>
                <hr class="d-block d-md-none" />
                <div class="col-12 col-md-8">
                <ul class="interactions">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> Like
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#comentModel">
                    <span><i class="fa-solid fa-comment"></i></span> Comment
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#shareModel">
                    <span><i class="fa-sharp fa-solid fa-share"></i></span>
                    Share
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="row">
                <div class="col-2 col-md-1">
                <img class="avatar" src="{{asset('web_files')}}/images/1.jpg" alt="" />
                </div>
                <div class="col-9 col-md-10">
                <h3 class="name">Ahmed mohamed</h3>
                <h4 class="desc">web developer</h4>
                </div>
                <div class="col-1">
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
                        <a class="dropdown-item" href="#">Show More</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Show Less</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Hide Post</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <img class="pic" src="{{asset('web_files')}}/images/1.jpg" alt="" />
                <p class="content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Rem illo, doloremque porro nemo accusantium nesciunt
                consectetur non iusto quos quasi fugiat aspernatur. Fugiat
                velit sequi ex quas nisi inventore blanditiis?
                </p>
                <hr class="d-none d-md-block" />
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                <ul class="inter_count">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> 20K
                    </li>
                    <li>
                    <span><i class="fa-solid fa-comment"></i></span> 110
                    </li>
                </ul>
                </div>
                <hr class="d-block d-md-none" />
                <div class="col-12 col-md-8">
                <ul class="interactions">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> Like
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#comentModel">
                    <span><i class="fa-solid fa-comment"></i></span> Comment
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#shareModel">
                    <span><i class="fa-sharp fa-solid fa-share"></i></span>
                    Share
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="row">
                <div class="col-2 col-md-1">
                <img class="avatar" src="{{asset('web_files')}}/images/1.jpg" alt="" />
                </div>
                <div class="col-9 col-md-10">
                <h3 class="name">Ahmed mohamed</h3>
                <h4 class="desc">web developer</h4>
                </div>
                <div class="col-1">
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
                        <a class="dropdown-item" href="#">Show More</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Show Less</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Hide Post</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <iframe
                class="pic"
                width="560"
                height="315"
                src="https://www.youtube.com/embed/ka8L8AhqcEA"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
                ></iframe>
                <p class="content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Rem illo, doloremque porro nemo accusantium nesciunt
                consectetur non iusto quos quasi fugiat aspernatur. Fugiat
                velit sequi ex quas nisi inventore blanditiis?
                </p>
                <hr class="d-none d-md-block" />
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                <ul class="inter_count">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> 20K
                    </li>
                    <li>
                    <span><i class="fa-solid fa-comment"></i></span> 110
                    </li>
                </ul>
                </div>
                <hr class="d-block d-md-none" />
                <div class="col-12 col-md-8">
                <ul class="interactions">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> Like
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#comentModel">
                    <span><i class="fa-solid fa-comment"></i></span> Comment
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#shareModel">
                    <span><i class="fa-sharp fa-solid fa-share"></i></span>
                    Share
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="row">
                <div class="col-2 col-md-1">
                <img class="avatar" src="{{asset('web_files')}}/images/1.jpg" alt="" />
                </div>
                <div class="col-9 col-md-10">
                <h3 class="name">Ahmed mohamed</h3>
                <h4 class="desc">web developer</h4>
                </div>
                <div class="col-1">
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
                        <a class="dropdown-item" href="#">Show More</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Show Less</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Hide Post</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <img class="pic" src="{{asset('web_files')}}/images/1.jpg" alt="" />
                <p class="content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Rem illo, doloremque porro nemo accusantium nesciunt
                consectetur non iusto quos quasi fugiat aspernatur. Fugiat
                velit sequi ex quas nisi inventore blanditiis?
                </p>
                <hr class="d-none d-md-block" />
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                <ul class="inter_count">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> 20K
                    </li>
                    <li>
                    <span><i class="fa-solid fa-comment"></i></span> 110
                    </li>
                </ul>
                </div>
                <hr class="d-block d-md-none" />
                <div class="col-12 col-md-8">
                <ul class="interactions">
                    <li>
                    <span><i class="fa-solid fa-heart"></i></span> Like
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#comentModel">
                    <span><i class="fa-solid fa-comment"></i></span> Comment
                    </li>
                    <li data-bs-toggle="modal" data-bs-target="#shareModel">
                    <span><i class="fa-sharp fa-solid fa-share"></i></span>
                    Share
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</main>
@endsection
