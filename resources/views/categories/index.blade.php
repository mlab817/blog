@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <ul>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('categories.show', $category) }}">
                            {{ $category->label }} <span class="badge alert-success">{{ $category->posts()->count() }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
