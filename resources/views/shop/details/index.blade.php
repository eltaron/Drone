@extends('web.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/storeDetails.css">
    <link rel="stylesheet" href="{{asset('web_files')}}/css/productDetails.css">
@endpush
@section('content')
<div class="p-0 p-md-5">
    <div class="container-fluid">
        <nav class="ms-2 mt-3 col-11" style="--bs-breadcrumb-divider: '>'; aria-label=" breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Stores</a></li>
                <li class="breadcrumb-item active" aria-current="page">AE Adv.</li>
            </ol>
        </nav>
    </div>
    <section aria-label="Main content" role="main" class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex  mt-3" style="flex-wrap: wrap;">
                    <div class="thumbs d-flex">
                        <a class="thumb-image active"
                            href="https://placeimg.com/1080/500/animals"
                            >
                            <span><img
                                    src="https://placeimg.com/1080/500/animals"
                                    alt="Tommy Hilfiger T-Shirt New York"></span>
                        </a>
                        <a class="thumb-image"
                            href="https://placeimg.com/1080/500/animals"
                            >
                            <span><img
                                    src="https://placeimg.com/1080/500/animals"
                                    alt="Tommy Hilfiger T-Shirt New York"></span>
                        </a>
                        <a class="thumb-image"
                            href="https://placeimg.com/1080/500/animals"
                            >
                            <span><img
                                    src="https://placeimg.com/1080/500/animals"
                                    alt="Tommy Hilfiger T-Shirt New York"></span>
                        </a>
                        <a class="thumb-image"
                            href="https://placeimg.com/1080/500/animals"
                            >
                            <span><img
                                    src="https://placeimg.com/1080/500/animals"
                                    alt="Tommy Hilfiger T-Shirt New York"></span>
                        </a>
                    </div>
                    <div id="big-image" class="img" style="background-image: url('https://placeimg.com/1080/500/animals')"></div>

                </div>
                <div class="col-lg-6 mt-3">
                    <div class=" mb-3">
                        <h2 class="row">
                            <span class="col-6 text-start p-0">FERTILIZER</span>
                            <span class="col-6 text-end p-0">550 EGP</span>
                        </h2>
                        <div class="rate">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-regular fa-star"></i>
                            99 REVIEW
                        </div>
                    </div>
                    <hr>
                    <div class="swatches mt-3">
                        <div class="swatch clearfix mb-3" >
                            <div class="header"><h3>Type : <span>50K</span></h3></div>
                            <div data-value="M" class="swatch-element plain m available">
                                <input id="swatch-0-m" type="radio" name="option-0" value="M" checked />
                                <label for="swatch-0-m">
                                    10Kg
                                </label>
                            </div>
                            <div data-value="L" class="swatch-element plain l available">
                                <input id="swatch-0-l" type="radio" name="option-0" value="L" />
                                <label for="swatch-0-l">
                                    10Kg
                                </label>
                            </div>
                            <div data-value="XL" class="swatch-element plain xl available">
                                <input id="swatch-0-xl" type="radio" name="option-0" value="XL" />
                                <label for="swatch-0-xl">
                                    20Kg
                                </label>
                            </div>
                            <div data-value="XXL" class="swatch-element plain xxl available">
                                <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL" />
                                <label for="swatch-0-xxl">
                                    50Kg
                                </label>
                            </div>
                        </div>
                        <div class="swatch clearfix mb-3" >
                            <div class="header"><h3>Weight : <span>50K</span></h3></div>
                            <div data-value="M" class="swatch-element plain m available">
                                <input id="swatch-0-m" type="radio" name="option-0" value="M" checked />
                                <label for="swatch-0-m">
                                    10Kg
                                </label>
                            </div>
                            <div data-value="L" class="swatch-element plain l available">
                                <input id="swatch-0-l" type="radio" name="option-0" value="L" />
                                <label for="swatch-0-l">
                                    10Kg
                                </label>
                            </div>
                            <div data-value="XL" class="swatch-element plain xl available">
                                <input id="swatch-0-xl" type="radio" name="option-0" value="XL" />
                                <label for="swatch-0-xl">
                                    20Kg
                                </label>
                            </div>
                            <div data-value="XXL" class="swatch-element plain xxl available">
                                <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL" />
                                <label for="swatch-0-xxl">
                                    50Kg
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="pe-0 pe-lg-5 ps-0 ps-lg-5">
                        <div class="form-group row w-100">
                            <div class="col-6">
                                <h2 class="text">TOTAL = <span>2</span></h2>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button id="down" class="btn btn-default" onclick=" down('0')"><span class="glyphicon glyphicon-minus">-</span></button>
                                    </div>
                                    <input type="text" id="myNumber" class="text-center form-control input-number" value="1" />
                                    <div class="input-group-btn">
                                        <button id="up" class="btn btn-default" onclick="up('10')"><span class="glyphicon glyphicon-plus">+</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row w-100">
                            <h2 class="text">TOTAL PRICE : <span>1100.00 EGP</span></h2>
                        </div>
                        <form action="">
                            <input type="hidden" id="myNumber2">
                            <div id="AddToCart" class="form-group row w-100">
                                <button class="col-12" id="AddToCartText">Add to Cart</button>
                            </div>
                        </form>
                        <div class="form-group buttons w-100 d-flex">
                            <button class="ms-0">Add to Wishlist</button>
                            <button class="me-0">Share Product</button>
                        </div>
                    </div>
                    <div class="row tabs pt-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Comments</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis non molestias error earum autem natus aliquam molestiae rem, beatae voluptas perspiciatis, aspernatur facere ea? Corrupti hic quibusdam harum beatae molestias.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                comment
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5">
        <div class="container-fluid mb-5">
            <div class="row col-12 d-flex justify-content-between">
                <h3 class="col-6 sub-head text-start">Similar Products</h3>
            </div>
            <div class="main">
                <ul class="cards">
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png"></div>
                            <div class="text-right menu">
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical lg"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="#">Share Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card_content">
                                <div class="row d-flex flex-row  justify-content-between">
                                    <h2 class="card_title col-md-8 text-left  ps-0 pe-0">Fertilizers</h2>
                                    <p class="card_title col-md-4 text-center text-end p-0">440.00 EGP</p>
                                </div>
                                <div class="row d-flex flex-row justify-content-between">
                                    <p class="card_text col-8 ps-0 d-none d-md-block">dummy dummy dummy dummy dummy</p>
                                    <p class="card_text col-md-4 p-0 text-decoration-line-through text-end">550.00 EGP
                                    </p>
                                </div>
                                <div class=" row mt-2 d-md-flex justify-content-center">
                                    <button onclick="window.location.href='#wishlist'" ;
                                        class="btn card_btn col-md-3 me-1" style="background-color: var(--sec-color);">
                                        <span><i class="fa-sharp fa-solid fa-heart "></i></span>
                                    </button>
                                    <button onclick="window.location.href='#cart'" ; class="btn card_btn col-md-8">
                                        <span><i class="fa-solid fa-cart-shopping"></i></span> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png"></div>
                            <div class="text-right menu">
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical lg"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="#">Share Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card_content">
                                <div class="row d-flex flex-row  justify-content-between">
                                    <h2 class="card_title col-md-8 text-left  ps-0 pe-0">Fertilizers</h2>
                                    <p class="card_title col-md-4 text-center text-end p-0">440.00 EGP</p>
                                </div>
                                <div class="row d-flex flex-row justify-content-between">
                                    <p class="card_text col-8 ps-0 d-none d-md-block">dummy dummy dummy dummy dummy</p>
                                    <p class="card_text col-md-4 p-0 text-decoration-line-through text-end">550.00 EGP
                                    </p>
                                </div>
                                <div class=" row mt-2 d-md-flex justify-content-center">
                                    <button onclick="window.location.href='#wishlist'" ;
                                        class="btn card_btn col-md-3 me-1" style="background-color: var(--sec-color);">
                                        <span><i class="fa-sharp fa-solid fa-heart "></i></span>
                                    </button>
                                    <button onclick="window.location.href='#cart'" ; class="btn card_btn col-md-8">
                                        <span><i class="fa-solid fa-cart-shopping"></i></span> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png"></div>
                            <div class="text-right menu">
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical lg"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="#">Share Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card_content">
                                <div class="row d-flex flex-row  justify-content-between">
                                    <h2 class="card_title col-md-8 text-left  ps-0 pe-0">Fertilizers</h2>
                                    <p class="card_title col-md-4 text-center text-end p-0">440.00 EGP</p>
                                </div>
                                <div class="row d-flex flex-row justify-content-between">
                                    <p class="card_text col-8 ps-0 d-none d-md-block">dummy dummy dummy dummy dummy</p>
                                    <p class="card_text col-md-4 p-0 text-decoration-line-through text-end">550.00 EGP
                                    </p>
                                </div>
                                <div class=" row mt-2 d-md-flex justify-content-center">
                                    <button onclick="window.location.href='#wishlist'" ;
                                        class="btn card_btn col-md-3 me-1" style="background-color: var(--sec-color);">
                                        <span><i class="fa-sharp fa-solid fa-heart "></i></span>
                                    </button>
                                    <button onclick="window.location.href='#cart'" ; class="btn card_btn col-md-8">
                                        <span><i class="fa-solid fa-cart-shopping"></i></span> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png"></div>
                            <div class="text-right menu">
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical lg"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="#">Share Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card_content">
                                <div class="row d-flex flex-row  justify-content-between">
                                    <h2 class="card_title col-md-8 text-left  ps-0 pe-0">Fertilizers</h2>
                                    <p class="card_title col-md-4 text-center text-end p-0">440.00 EGP</p>
                                </div>
                                <div class="row d-flex flex-row justify-content-between">
                                    <p class="card_text col-8 ps-0 d-none d-md-block">dummy dummy dummy dummy dummy</p>
                                    <p class="card_text col-md-4 p-0 text-decoration-line-through text-end">550.00 EGP
                                    </p>
                                </div>
                                <div class=" row mt-2 d-md-flex justify-content-center">
                                    <button onclick="window.location.href='#wishlist'" ;
                                        class="btn card_btn col-md-3 me-1" style="background-color: var(--sec-color);">
                                        <span><i class="fa-sharp fa-solid fa-heart "></i></span>
                                    </button>
                                    <button onclick="window.location.href='#cart'" ; class="btn card_btn col-md-8">
                                        <span><i class="fa-solid fa-cart-shopping"></i></span> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
@push('scripts')
<script>
    function up(max) {
        document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
        if (document.getElementById("myNumber").value >= parseInt(max)) {
            document.getElementById("myNumber").value = max;
            document.getElementById("myNumber2").value = max;
        }
    }
    function down(min) {
        document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
        if (document.getElementById("myNumber").value <= parseInt(min)) {
            document.getElementById("myNumber").value = min;
            document.getElementById("myNumber2").value = min;
        }
    }
</script>
@endpush
@endsection
