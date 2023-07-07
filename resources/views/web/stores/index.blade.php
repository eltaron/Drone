@extends('web.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/storeHome.css">
@endpush
@section('content')
<div
  id="carouselExampleIndicators"
  class="carousel slide"
  data-ride="carousel"
>
  <div class="carousel-indicators">
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner p-0">
    <div class="carousel-item active">
      <img
        class="d-block w-100"
        src="{{asset('web_files')}}/images/c1.jpg"
        alt="First slide"
      />
    </div>
    <div class="carousel-item">
      <img
        class="d-block w-100"
        src="{{asset('web_files')}}/images/c2.jpg"
        alt="Second slide"
      />
    </div>
    <div class="carousel-item">
      <img
        class="d-block w-100"
        src="{{asset('web_files')}}/images/c2.jpg"
        alt="Third slide"
      />
    </div>
  </div>
</div>

<section class="mt-5">
  <div class="container">
    <div class="row col-12 d-flex justify-content-between">
      <h3 class="col-6 sub-head text-start">RELEVANT STORES</h3>
    </div>
    <div class="main row">
      <ul class="cards">
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>

        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="mt-5">
  <div class="container">
    <h3 class="col-6 sub-head text-start">HIGHLY RATED STORES</h3>
    <div
      id="carouselExampleControls"
      class="carousel slide mb-5"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <ul class="cards">
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
                      </button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
                      </button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
                      </button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
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
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
                      </button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
                      </button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
                      </button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{asset('web_files')}}/images/logoc.png" />
                  </div>
                  <div class="card_content">
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <h2 class="card_title">AE ADV.</h2>
                    </div>
                    <div
                      class="row d-flex flex-row justify-content-between"
                    >
                      <p class="card_text">ADVERTISING AGENCY</p>
                    </div>
                    <div class="row">
                      <span class="w-50 fs-6 pe-2 prate">
                        <i class="fa-sharp fa-solid fa-star"></i> 4.7
                      </span>
                      <button
                        onclick="window.location.href='#cart'"
                        ;
                        class="w-50 btn card_btn ali"
                      >
                        SHOP NOW
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
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row col-12 d-flex justify-content-between">
      <h3 class="col-6 sub-head text-start">STORES</h3>
      <a href="" class="text-end col-6">
        <h5 class="showAll text-decoration-underline">All STORES</h5>
      </a>
    </div>
    <div class="main">
      <ul class="cards">
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="{{asset('web_files')}}/images/logoc.png" /></div>
            <div class="card_content">
              <div class="row d-flex flex-row justify-content-between">
                <h2 class="card_title">AE ADV.</h2>
              </div>
              <div class="row d-flex flex-row justify-content-between">
                <p class="card_text">ADVERTISING AGENCY</p>
              </div>
              <div class="row">
                <span class="w-50 fs-6 pe-2 prate">
                  <i class="fa-sharp fa-solid fa-star"></i> 4.7
                </span>
                <button
                  onclick="window.location.href='#cart'"
                  ;
                  class="w-50 btn card_btn ali"
                >
                  SHOP NOW
                </button>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
@push('scripts')
<script src="{{asset('web_files')}}/vendor/Bootstrap/bootstrap.bundle.min.js"></script>
@endpush
@endsection
