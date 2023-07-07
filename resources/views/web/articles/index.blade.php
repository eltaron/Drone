@extends('web.layouts.contentapp')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/articles.css">
@endpush
@section('content')
<main>
    <div class="articles mt-5" id="articles">
    <div class="container">
        @forelse ($articles as $article)
        <div class="box">
            <img src="{{asset('web_files')}}/images/1.jpg" alt="" />
            <div class="content">
                <a href="{{url('articleDetails/'.$article->id)}}">
                    <h2><i class="bult"></i> {{$article->title}}</h2>
                    <p>{{ \Illuminate\Support\Str::limit($article->description, 150, $end='...') }} </p>
                </a>
            </div>
            <div class="info">
                <label class="control-label"
                ><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i
                ></label>
            </div>
        </div>
        @empty
        <div class="notFound col-12 text-center pt-3" style="width: 90vw">
            <p>No Articles Found</p>
        </div>
        @endforelse
    </div>
    </div>
</main>
@endsection
