@extends('layouts.app') @section('content')

<section class="section">
    <div class="container">
        @forelse ($posts as $post)
        <div class="card mb-3">
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
        {{ $posts->links() }}

    </div>
</section>

<div class="container">
    <div class="columns">
        <div class="card">
            <div class="card-content">
                <forma></forma>
            </div>
        </div>
    </div>
</div>

@endsection