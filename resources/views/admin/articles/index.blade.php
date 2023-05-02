@extends('admin.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid py-2">
        <section class="postcard light">
            <a class=" d-md-flex" href="#">
                <img class="postcard__img" src="{{asset('admin_files')}}/img/1.jpg" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark d-flex justify-content-start">
                <h1 class="postcard__title"><a href="#">Article Title</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, April 13th 2023
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat
                    asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo
                    accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo
                    iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
            </div>
        </section>
        <section class="postcard light">
            <a class=" d-md-flex" href="#">
                <img class="postcard__img" src="{{asset('admin_files')}}/img/1.jpg" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark d-flex justify-content-start">
                <h1 class="postcard__title"><a href="#">Article Title</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, April 13th 2023
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat
                    asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo
                    accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo
                    iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
            </div>
        </section>
        <section class="postcard light">
            <a class=" d-md-flex" href="#">
                <img class="postcard__img" src="{{asset('admin_files')}}/img/1.jpg" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark d-flex justify-content-start">
                <h1 class="postcard__title"><a href="#">Article Title</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, April 13th 2023
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat
                    asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo
                    accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo
                    iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
            </div>
        </section>
    </div>
</div>
@endsection
