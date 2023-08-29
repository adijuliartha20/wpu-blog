@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-4">{{ $post->title }}</h2>
                <p>By <a href="/authors/{{ $post->user->user_name }}" class="text-decoration-none">{{ $post->user->name }}</a>  in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>                
                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
    <!--<article>
        <h2>{{ $post->title }}</h2>
        <p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a>  in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/blog" class="d-block mt-3">Back to Posts</a>-->
@endsection