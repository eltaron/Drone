@extends('web.layouts.contentapp')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/posts.css">
@endpush
@section('content')
<main>
    <div class="container mt-5">
        <button class="addPost" data-bs-toggle="modal" data-bs-target="#addModal"> + </button>
        <div class="row">
            <div class="col-12">
                @forelse ($posts as $post)
                <div class="item">
                    <div class="row">
                        <div class="col-2 col-md-1">
                        <img class="avatar" src="{{asset('web_files')}}/images/1.jpg" alt="" />
                        </div>
                        <div class="col-10 col-md-11">
                            <h3 class="name">{{$post->user->name}}</h3>
                            <h4 class="desc">{{$post->time_ago}}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <img class="pic" src="{{$post->iamge->url}}" alt="" />
                        <p class="content">
                            {{$post->description}}
                        </p>
                        <hr class="d-none d-md-block" />
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <ul class="inter_count">
                                <li>
                                <span><i class="fa-solid fa-heart"></i></span> {{count($post->likes)}}
                                </li>
                                <li>
                                <span><i class="fa-solid fa-comment"></i></span> {{count($post->comments)}}
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
                                {{-- <li data-bs-toggle="modal" data-bs-target="#shareModel">
                                <span><i class="fa-sharp fa-solid fa-share"></i></span>
                                Share
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-warning text-center" role="alert">
                    No posts
                </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>
</main>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('posts/store')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div>
                        <label>Post Title</label>
                        <input name="title" class="form-control" required placeholder="Enter Product Name"/>
                    </div>
                    <div>
                        <label>
                        <span>Post Description</span>
                        </label>
                        <textarea name="description" required class="form-control" cols="30" rows="8" style="height: auto" placeholder="Enter Product Description"></textarea>
                    </div>
                    <div>
                        <label>
                        <span>Post Category</span>
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
                        <span>Post Images</span><i>(add image or more)</i>
                        </label>
                        <div>
                        <input type="file" required class="form-control" name="images[]" id="" multiple>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
<script src="{{asset('web_files')}}/vendor/Bootstrap/js/bootstrap.min.js"></script>
@endpush
@endsection
