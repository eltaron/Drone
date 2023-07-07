@extends('trader.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="row d-flex align-items-center justify-content-between">
                            <h4 class="card-title font-weight-bold ml-3">All {{$title}}</h4>
                            <div class="justify-content-end mr-4">
                                <a href="#" class="btn btn-primary btn-fill mx-3" data-toggle="modal" data-target="#addModal">Add Product</a>
                                @if ($title == 'Offers')
                                    <a href="#" class="btn btn-primary btn-fill mx-3" data-toggle="modal" data-target="#addOffer">Add Offer</a>
                                @endif
                                @if ($title == 'Special Products')
                                    <a href="#" class="btn btn-primary btn-fill mx-3" data-toggle="modal" data-target="#addSpecial">Add Special Product</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-3">
                                    <div class="card w-100">
                                        @if ($product->image)
                                        <img src="{{$product->image->url}}" class="card-img-top" alt="...">
                                        @endif
                                        <div class="card-body">
                                            <h3 class="card-title font-weight-bold">{{$product->title}}</h3>
                                            <h5 class="card-subtitle mt-2 text-muted">{!!$product->offer ? $product->offer->price . '<sub><del> '.$product->price.'</del></sub>' : $product->price!!} {{ $product->currency }}</h5>
                                            <p class="card-text">{{$product->description}}</p>
                                            <div class="text-center">
                                                <a href="#" data-id="{{$product->id}}" data-odate="{{$product->offer ? $product->offer->end_at : ''}}" data-offer="{{$product->offer ? $product->offer->price : ''}}" data-price="{{$product->price}}" data-description="{{$product->description}}" data-title="{{$product->title}}" class="btn btn-primary edit_product">Edit Product</a>
                                                <a href="#" data-id="{{$product->id}}" class="btn btn-warning delete_product">Remove Product</a> <br>
                                                @if ($title == 'Offers')
                                                <a href="#" data-id="{{$product->offer->id}}" class="btn btn-warning delete_offer mt-1">Remove Offer</a>
                                                @endif
                                                @if ($title == 'Special Products')
                                                <a href="#" data-id="{{$product->specialist->id}}" class="btn btn-warning delete_special mt-1">Remove Special Products</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addOffer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Offer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/storeoffer')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div>
                        <label>
                        <span>Product</span>
                        </label>
                        <select name="product_id" required class="form-control" id="">
                            <option disabled selected>Choose Product</option>
                            @foreach ($offers as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>
                        <span>Offer Price </span><i>(if found)</i>
                        </label>
                        <input type="number" name="oprice" required class="form-control" placeholder="Enter Offer Price"/>
                    </div>
                    <div>
                        <label>
                        <span>Offer Date </span><i>(if found)</i>
                        </label>
                        <input type="date" name="odate" required class="form-control" placeholder="Enter Offer Date"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Offer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="addSpecial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Special Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/storespecial')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div>
                        <label>
                        <span>Product</span>
                        </label>
                        <select name="product_id" class="form-control" id="" required>
                            <option disabled selected>Choose Product</option>
                            @foreach ($specialists as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>
                        <span>End Date </span><i>(if found)</i>
                        </label>
                        <input type="date" name="odate" required class="form-control" placeholder="Enter Offer Date"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Special Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/store')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div>
                        <label>Product Name</label>
                        <input name="title" class="form-control" required placeholder="Enter Product Name"/>
                    </div>
                    <div>
                        <label>
                        <span>Product Description</span>
                        </label>
                        <textarea name="description" class="form-control" cols="30" rows="8" style="height: auto" placeholder="Enter Product Description"></textarea>
                    </div>
                    <div>
                        <label>
                        <span>Product Category</span>
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
                        <span>Product Images</span><i>(add image or more)</i>
                        </label>
                        <div>
                        <input type="file" required class="form-control" name="images[]" id="" multiple>
                        </div>
                    </div>
                    <div>
                        <label>
                        <span>Offer Price </span><i>(if found)</i>
                        </label>
                        <input type="number" name="oprice" class="form-control" placeholder="Enter Offer Price"/>
                    </div>
                    <div>
                        <label>
                        <span>Offer Date </span><i>(if found)</i>
                        </label>
                        <input type="date" name="odate" class="form-control" placeholder="Enter Offer Date"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="edit_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/edit')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id2">
                    <div>
                        <label>Product Name</label>
                        <input name="title" class="form-control" id="ptitle" required placeholder="Enter Product Name"/>
                    </div>
                    <div>
                        <label>
                        <span>Product Description</span>
                        </label>
                        <textarea name="description" id="pdescription" class="form-control" cols="30" rows="8" style="height: auto" placeholder="Enter Product Description"></textarea>
                    </div>
                    <div>
                        <label>
                        <span>Product Category</span>
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
                        <input type="number" required name="price" id="pprice" class="form-control" placeholder="Enter Price"/>
                    </div>
                    <div>
                        <label>
                        <span>Product Images</span><i>(add image or more)</i>
                        </label>
                        <div>
                        <input type="file" class="form-control" name="images[]" id="" multiple>
                        </div>
                    </div>
                    <div>
                        <label>
                        <span>Offer Price </span><i>(if found)</i>
                        </label>
                        <input type="number" name="oprice" id="oprice" class="form-control" placeholder="Enter Offer Price"/>
                    </div>
                    <div>
                        <label>
                        <span>Offer Date </span><i>(if found)</i>
                        </label>
                        <input type="date" name="odate" id="odate" class="form-control" placeholder="Enter Offer Date"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="delete_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/destroy')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id">
                    <h2>Are you shure you want to delete this product ?</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Delete Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="delete_offer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Offer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/destroyoffer')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id3">
                    <h2>Are you shure you want to delete this offer ?</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Delete Offer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="delete_special" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Special Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('products/destroyspecial')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id4">
                    <h2>Are you shure you want to delete this special products ?</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Delete Special Products</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $(".delete_product").click(function() {
            var id = $(this).attr('data-id');
            $("#product_id").val(id);
            $("#delete_product").modal('toggle');
        });
        $(".delete_offer").click(function() {
            var id = $(this).attr('data-id');
            $("#product_id3").val(id);
            $("#delete_offer").modal('toggle');
        });
        $(".delete_special").click(function() {
            var id = $(this).attr('data-id');
            $("#product_id4").val(id);
            $("#delete_special").modal('toggle');
        });
        $(".edit_product").click(function() {
            var id          = $(this).attr('data-id');
            var odate       = $(this).attr('data-odate');
            var offer       = $(this).attr('data-offer');
            var price       = $(this).attr('data-price');
            var title       = $(this).attr('data-title');
            var description = $(this).attr('data-description');
            $("#product_id2").val(id);
            $("#ptitle").val(title);
            $("#pdescription").val(description);
            $("#pprice").val(price);
            $("#oprice").val(offer);
            $("#odate").val(odate);
            $("#edit_product").modal('toggle');
        });
    });
</script>
@endpush
@endsection

