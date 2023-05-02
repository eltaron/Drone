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
            <div class="col-9 col-md-10">
                <h3 class="name">Ahmed mohamed</h3>
                <h4 class="desc">web developer</h4>
            </div>
            <div class="col-1 text-right">
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
            </div>
            </div>
            <div class="row">
            <img class="pic" src="{{asset('web_files')}}/images/1.jpg" alt="" />
            <p class="content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem
                illo, doloremque porro nemo accusantium nesciunt consectetur
                non iusto quos quasi fugiat aspernatur. Fugiat velit sequi ex
                quas nisi inventore blanditiis? Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Rem illo, doloremque porro nemo
                accusantium nesciunt consectetur non iusto quos quasi fugiat
                aspernatur. Fugiat velit sequi ex quas nisi inventore
                blanditiis?Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Rem illo, doloremque porro nemo accusantium nesciunt
                consectetur non iusto quos quasi fugiat aspernatur. Fugiat
                velit sequi ex quas nisi inventore blanditiis?Lorem ipsum
                dolor sit amet consectetur, adipisicing elit. Rem illo,
                doloremque porro nemo accusantium nesciunt consectetur non
                iusto quos quasi fugiat aspernatur. Fugiat velit sequi ex quas
                nisi inventore blanditiis?Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Rem illo, doloremque porro nemo
                accusantium nesciunt consectetur non iusto quos quasi fugiat
                aspernatur. Fugiat velit sequi ex quas nisi inventore
                blanditiis?Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Rem illo, doloremque porro nemo accusantium nesciunt
                consectetur non iusto quos quasi fugiat aspernatur. Fugiat
                velit sequi ex quas nisi inventore blanditiis?
            </p>
            <hr class="d-none d-md-block" />
            </div>
            <div class="row article-foot d-flex justify-content-between">
            <div class="col-12 col-md-4">Feb. 20 , 2023 - 12:35PM</div>
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
