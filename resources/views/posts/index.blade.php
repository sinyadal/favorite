@extends('layouts.app') @section('content')

<section class="section">
    <div class="container">
        @forelse ($posts as $post)
        <div class="card mb-4">
            <div class="card-content">
                @if (Auth::check())
                <favorite :post={{ $post->id }} :favorited={{ $post->favorited() ? 'true' : 'false' }} >
                </favorite>
                @endif
                <p class="title is-4">{{ $post->title }}</p>
                {{ $post->body }}
            </div>
        </div>
        @empty
        <p>No post created.</p>
        @endforelse 
        <div class="is-centered mt-5">
            {{ $posts->links('vendor.pagination.bulma') }}
        </div>
    
    </div>
</section>

@endsection