@extends('layouts.app')

@section('content')
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Hello, world!</h1>
            <p class="lead my-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p class="lead mb-0">
                <a href="#" class="text-white font-weight-bold">Continue reading...</a>
            </p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-8">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Latest Posts
            </h3>

            @foreach(\App\Models\Post::take(2)->get() as $post)
                <div class="blog-post">
                    <h2 class="blog-post-title">
                        {{ $post->title }}
                    </h2>
                    <p class="blog-post-meta">
                        {{ $post->updated_at->format('M d, Y') }}
                    </p>
                    <p>
                        {{ $post->body }}
                    </p>
                </div>
            @endforeach

            <a href="{{ route('posts.index') }}" class="font-italic">More posts...</a>
        </div>

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">
                    About
                </h4>

                <p class="mb-0">
                    Some about text...
                </p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Categories</h4>

                <ul class="list-unstyled">
                    @foreach(\App\Models\Category::all() as $category)
                        <li>
                            <a href="{{ route('categories.show', $category) }}">{{ $category->label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
@endsection
