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
                    <h1 class="postcard__title"><a href="#">{{$article->title}}</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>{{$article->time_ago}}
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{$article->description}}</div>
                    <div class="buttons">
                        <a href="" class="btn btn-success text-success">Show Article</a>
                        <button data-id="{{$article->id}}" data-description="{{$article->description}}" data-title="{{$article->title}}" data-tags="{{$article->tags}}" class="btn btn-primary edit_product">Edit Article</button>
                        <button data-id="{{$article->id}}" class="btn btn-warning delete_product ">Remove Article</button>
                    </div>
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
            <form action="{{turl('articles/store')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div>
                        <label>Article Title</label>
                        <input name="title" class="form-control" required placeholder="Enter Product Name"/>
                    </div>
                    <div>
                        <label>
                        <span>Article Description</span>
                        </label>
                        <textarea name="description" required class="form-control" cols="30" rows="8" style="height: auto" placeholder="Enter Product Description"></textarea>
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
                        <span>Article Images</span><i>(add image or more)</i>
                        </label>
                        <div>
                        <input type="file" required class="form-control" name="images[]" id="" multiple>
                        </div>
                    </div>
                    <div>
                        <label>
                        <span>Tags</span><i>(separate with ',')</i>
                        </label>
                        <div>
                            <input type="text" name="tags" class="form-control" placeholder="separate with ','"/>
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
<div class="modal fade" id="edit_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('articles/edit')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="article_id" id="product_id2">
                    <div>
                        <label>Article Title</label>
                        <input name="title" class="form-control" id="ptitle" required placeholder="Enter Product Name"/>
                    </div>
                    <div>
                        <label>
                        <span>Article Description</span>
                        </label>
                        <textarea name="description" id="pdescription" class="form-control" cols="30" rows="8" style="height: auto" placeholder="Enter Product Description"></textarea>
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
                        <span>Tags</span><i>(separate with ',')</i>
                        </label>
                        <div>
                            <input type="text" name="tags" id="tags" class="form-control" placeholder="separate with ','"/>
                        </div>
                    </div>
                    <div>
                        <label>
                        <span>Article Images</span><i>(add image or more)</i>
                        </label>
                        <div>
                        <input type="file" class="form-control" name="images[]" id="" multiple>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit Article</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="delete_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{turl('articles/destroy')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="article_id" id="product_id">
                    <h2>Are you shure you want to delete this Article ?</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Delete Article</button>
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
        $(".edit_product").click(function() {
            var id          = $(this).attr('data-id');
            var tags       = $(this).attr('data-tags');
            var title       = $(this).attr('data-title');
            var description = $(this).attr('data-description');
            $("#product_id2").val(id);
            $("#ptitle").val(title);
            $("#pdescription").val(description);
            $("#tags").val(tags);
            $("#edit_product").modal('toggle');
        });
    });
</script>
@endpush
@endsection
