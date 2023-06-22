@extends('web.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/shopHome.css">
    <link rel="stylesheet" href="{{asset('web_files')}}/css/storeDetails.css">
@endpush
@section('content')
<div class="container text-center">
    <div class="col-7 m-auto title mb-5">
    <p class="fs-1 m-auto">The Best Place To Find & Buy</p>
    <p class="fs-1 m-auto title">Official And Amazing Products</p>
    <blockquote class="m-auto quote">
        The First Egyptian Website For Agricultural Products
    </blockquote>
    </div>

    <div
    id="carouselExampleControls1"
    class="carousel slide mb-5"
    data-ride="carousel"
    >
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="cards-wrapper">
            <ul class="cards">
            <li class="cards_item">
                <div class="card main-card1 p-4">
                <h1 style="color: var(--sec-color)">Trending</h1>
                <h1 style="color: white">Products</h1>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
        <div class="carousel-item">
        <div class="cards-wrapper">
            <ul class="cards">
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <button
        class="carousel-control-prev d-none d-lg-flex"
        type="button"
        data-bs-target="#carouselExampleControls1"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next d-none d-lg-flex"
        type="button"
        data-bs-target="#carouselExampleControls1"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div
    id="carouselExampleControls2"
    class="carousel slide mb-5"
    data-ride="carousel"
    >
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="cards-wrapper">
            <ul class="cards">
            <li class="cards_item">
                <div class="card main-card2 p-4">
                <h1 style="color: var(--sec-color)">Trending</h1>
                <h1 style="color: white">Offers</h1>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
        <div class="carousel-item">
        <div class="cards-wrapper">
            <ul class="cards">
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
                <div class="text-right menu">
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
                        <a class="dropdown-item" href="#">Share Product</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card_content">
                    <div class="row d-flex flex-row justify-content-between">
                    <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                        Fertilizers
                    </h2>
                    <p class="card_title col-md-4 text-center text-end p-0">
                        440.00 EGP
                    </p>
                    </div>
                    <div class="row d-flex flex-row justify-content-between">
                    <p class="card_text col-8 ps-0 d-none d-md-block">
                        dummy dummy dummy dummy dummy
                    </p>
                    <p
                        class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                    >
                        550.00 EGP
                    </p>
                    </div>
                    <div class="row mt-2 d-md-flex justify-content-center">
                    <button
                        onclick="window.location.href='#wishlist'"
                        ;
                        class="btn card_btn col-md-3 me-0 me-md-1"
                        style="background-color: var(--sec-color)"
                    >
                        <span
                        ><i class="fa-sharp fa-solid fa-heart"></i
                        ></span>
                    </button>
                    <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="btn card_btn col-md-8"
                    >
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        Add To Cart
                    </button>
                    </div>
                </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <button
        class="carousel-control-prev d-none d-lg-flex"
        type="button"
        data-bs-target="#carouselExampleControls2"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next d-none d-lg-flex"
        type="button"
        data-bs-target="#carouselExampleControls2"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="row col-12 d-flex justify-content-between">
    <h3 class="col-6 sub-head text-start">Products</h3>
    <a href="#allOffers" class="text-end col-6">
        <h5 class="showAll text-decoration-underline">All Products</h5>
    </a>
    </div>
    <div class="main">
    <ul class="cards">
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
        <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="text-right menu">
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
                    <a class="dropdown-item" href="#">Share Product</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="card_content">
            <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title col-md-8 text-left ps-0 pe-0">
                Fertilizers
                </h2>
                <p class="card_title col-md-4 text-center text-end p-0">
                440.00 EGP
                </p>
            </div>
            <div class="row d-flex flex-row justify-content-between">
                <p class="card_text col-8 ps-0 d-none d-md-block">
                dummy dummy dummy dummy dummy
                </p>
                <p
                class="card_text col-md-4 p-0 text-decoration-line-through text-end"
                >
                550.00 EGP
                </p>
            </div>
            <div class="row mt-2 d-md-flex justify-content-center">
                <button
                onclick="window.location.href='#wishlist'"
                ;
                class="btn card_btn col-md-3 me-0 me-md-1"
                style="background-color: var(--sec-color)"
                >
                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                </button>
                <button
                onclick="window.location.href='#cart'"
                ;
                class="btn card_btn col-md-8"
                >
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add
                To Cart
                </button>
            </div>
            </div>
        </div>
        </li>
    </ul>
    </div>
    <nav aria-label="..." class="d-flex justify-content-center mt-5">
    <ul class="pagination pagination">
        <li class="page-item"><a class="page-link" href="#"><<</a></li>
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">1</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">>></a></li>
    </ul>
    </nav>
</div>
@endsection