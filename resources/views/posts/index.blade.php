@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('posts.show', $post) }}" class="card-link">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <p class="card-text">
                                {{ substr($post->body, 0, 150) . '...' }}
                            </p>
                            <p class="card-text">
                                @foreach($post->categories as $category)
                                    <a href="{{ route('categories.show', $category) }}" class="badge alert-success">{{ $category->label }}</a>
                                @endforeach
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated {{ $post->updated_at->diffForHumans(null, null, true) }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
