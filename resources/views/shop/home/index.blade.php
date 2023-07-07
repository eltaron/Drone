@extends('web.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/storeDetails.css">
    <style>
        iframe{
            width: 100%;
        }
    </style>
@endpush
@section('content')

<section class="mb-5 mt-5">
    <div class="container col-12 d-block flex-row align-items-center justify-content-between d-lg-flex">
      <div class="col-lg-4 col-12 card Scard p-1 mb-lg-0 mb-3 me-lg-3 me-0">
        <img src="{{storeNameData()->store->logo}}" class="card-img-top img-thumbnail mx-auto d-block profileCardImage"  alt="Store Image">
        <div class="card-body text-center">
          <h3 class="card-title">{{storeNameData()->store->store_name}}</h3>
          <h5 class="card-text">{{storeNameData()->about}}</h5>
          <hr>
          <span class="storeRate fs-5">
            <i class="fa-sharp fa-solid fa-star"></i> 4.7
          </span>
          <hr>
          <h6 class="card-title pt-2">{{storeNameData()->store->address}}</h6>
          {{-- <button onclick="window.location.href='#cart'"; class="mt-1 mb-1 pt-1 pb-1 fs-6 pe-3 ps-3 chat" >Chat Now!</button> --}}
          <div class="fs-5 share text-start pt-3 d-flex align-items-center justify-content-between" >
            <a href="#share"><i class="fa-solid fa-location-arrow"></i> Share</a>
            <span class="text-end rate fs-5">
              <i class="fa-sharp fa-regular fa-star"></i>
              <i class="fa-sharp fa-regular fa-star"></i>
              <i class="fa-sharp fa-regular fa-star"></i>
              <i class="fa-sharp fa-regular fa-star"></i>
              <i class="fa-sharp fa-regular fa-star"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="col-lg-1 col-0"></div>
      <div class="col-lg-7 col-12 map">
        {!!storeNameData()->store->google!!}
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row col-12 d-flex justify-content-between">
        <h3 class="col-6 sub-head text-start">Special Products</h3>
        @if (count($specials) > 0)
            <a href="#allOffers" class="text-end col-6">
                    <h5 class="showAll text-decoration-underline">Show All</h5>
            </a>
        @endif
      </div>
      <div class="main">
        <ul class="cards">
          @forelse ($specials as $special)
            <li class="cards_item">
                <div class="card w-100" >
                    <div class="card_image"><img src="{{$special->image->url}}" width="100%" height="200"></div>
                    <div class="card_content">
                        <div class="row d-flex flex-row  justify-content-between">
                            <h2 class="card_title col-md-8 text-left  ps-0 pe-0">{{$special->title}}</h2>
                            <p class="card_title col-md-4 text-center text-end p-0">{{$special->offer ?  $special->offer->price : $special->price}} {{currentCurrency()}}</p>
                        </div>
                        <div class="row d-flex flex-row justify-content-between">
                            <p class="card_text col-12">{{$special->description}}</p>
                        </div>
                        <div class=" row mt-2 d-md-flex justify-content-center">
                            <button class="btn card_btn col-md-3 me-1" style="background-color: var(--sec-color);" onclick="wishlist(this)">
                                <span><i class="fa-sharp fa-solid fa-heart "></i></span>
                            </button>
                            <button class="btn card_btn col-md-8" onclick="cart(this)">
                                <span><i class="fa-solid fa-cart-shopping"></i></span> Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </li>
          @empty
              <div class="notFound col-12 text-center pt-3">
                <p>No Special Products Found</p>
              </div>
          @endforelse
        </ul>
      </div>
    </div>
  </section>
  <section>
    <div class="container mt-5">
      <div class="row col-12 d-flex justify-content-between">
        <h3 class="col-6 sub-head text-start">Offers</h3>
        @if (count($offers) > 0)
            <a href="{{surl('products/offers')}}" class="text-end col-6">
                    <h5 class="showAll text-decoration-underline">Show All</h5>
            </a>
        @endif
      </div>
      <div class="main">
        <ul class="cards">
          @forelse ($offers as $offer)
            <li class="cards_item">
                <div class="card w-100" >
                    <div class="card_image"><img src="{{$offer->image->url}}" width="100%" height="200"></div>
                    <div class="card_content">
                        <div class="row d-flex flex-row  justify-content-between">
                            <h2 class="card_title col-md-8 text-left  ps-0 pe-0">{{$offer->title}}</h2>
                            <p class="card_title col-md-4 text-end p-0">{{$offer->offer ?  $offer->offer->price : $offer->price}} {{currentCurrency()}}</p>
                        </div>
                        <div class="row d-flex flex-row justify-content-between">
                            <p class="card_text col-8 ps-0 d-none d-md-block">{{$offer->description}}</p>
                            <p class="card_text col-md-4 p-0 text-decoration-line-through text-end">{{ $offer->price}} {{currentCurrency()}}</p>
                        </div>
                        <div class=" row mt-2 d-md-flex justify-content-center">
                            <button class="btn wishh card_btn col-md-3 me-1"   onclick="wishlist(this)" style="background-color: var(--sec-color);">
                                <span><i class="fa-sharp fa-solid fa-heart "></i></span>
                            </button>
                            <button class="btn Addcart card_btn col-md-8" onclick="cart(this)">
                                <span><i class="fa-solid fa-cart-shopping"></i></span> Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </li>
          @empty
            <div class="notFound col-12 text-center pt-3">
                <p>No Offers Found</p>
            </div>
          @endforelse
        </ul>
      </div>
    </div>
  </section>

  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row col-12 d-flex justify-content-between">
        <h3 class="col-6 sub-head text-start">Products</h3>
        @if (count($products) > 0)
            <a href="#allOffers" class="text-end col-6">
                <h5 class="showAll text-decoration-underline">Show All</h5>
            </a>
        @endif
      </div>
      <div class="main">
        <ul class="cards">
            @forelse ($products as $product)
                <li class="cards_item">
                    <div class="card w-100" >
                    <div class="card_image"><img src="{{$product->image->url}}" class=" w-100" height="200"></div>
                    <div class="card_content">
                        <div class="row d-flex flex-row  justify-content-between">
                        <h2 class="card_title col-md-8 text-left  ps-0 pe-0">{{$product->title}}</h2>
                        <p class="card_title col-md-4 text-center text-end p-0">{{$product -> price}}{{currentCurrency()}}</p>
                        </div>
                        <div class="row d-flex flex-row justify-content-between">
                        <p class="card_text col-8 ps-0 d-none d-md-block">{{$offer->description}}</p>
                        </div>
                        <div class=" row mt-2 d-md-flex justify-content-center">
                        <button onclick="wishlist(this)" class="btn card_btn col-md-3 me-1"
                            style="background-color: var(--sec-color);">
                            <span><i class="fa-sharp fa-solid fa-heart "></i></span>
                        </button>
                        <button onclick="cart(this)"  class="btn card_btn col-md-8">
                            <span><i class="fa-solid fa-cart-shopping"></i></span> Add To Cart
                        </button>
                        </div>
                    </div>
                    </div>
                </li>
            @empty
              <div class="notFound col-12 text-center pt-3">
                <p>No Products Found</p>
              </div>
            @endforelse
        </ul>
      </div>
    </div>
  </section>
@push('scripts')
<script src="{{asset('web_files')}}/js/storeDetails.js"></script>
@endpush
@endsection
