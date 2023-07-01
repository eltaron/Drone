@extends('trader.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid py-2">
        <div class="card-header ">
            <div class="row d-flex align-items-center justify-content-between">
                <h4 class="card-title font-weight-bold ml-3">All Articles</h4>
                <div class="justify-content-end mr-4">
                    <a href="#" class="btn btn-primary btn-fill mx-3" data-toggle="modal" data-target="#addModal">Add Article</a>
                </div>
            </div>
        </div>
        @foreach ($articles as $article)
            <section class="postcard light">
                <a class=" d-md-flex" href="#">
                    <img class="postcard__img" src="{{$article->image->url}}" alt="Image Title" />
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
        @endforeach
    </div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/store')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div>
                        <label>Article Name</label>
                        <input name="title" class="form-control" required placeholder="Enter Product Name"/>
                    </div>
                    <div>
                        <label>
                        <span>Article Description</span>
                        </label>
                        <textarea name="description" class="form-control" cols="30" rows="8" style="height: auto" placeholder="Enter Product Description"></textarea>
                    </div>
                    <div>
                        <label>
                        <span>Article Category</span>
                        </label>
                        <select name="category_id" class="form-control" id="">
                            <option disabled selected>Choose category</option>
                            @foreach (categories() as $item)
                                <option value="{{$item->id}}">{{$item->name_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>
                        <span>Price</span>
                        </label>
                        <input type="number" required name="price" class="form-control" placeholder="Enter Price"/>
                    </div>
                    <div>
                        <label>
                        <span>tags</span><i>(separate with ',')</i>
                        </label>
                        <div>
                            <input type="number" name="oprice" class="form-control" placeholder="Enter Offer Price"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Article</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
