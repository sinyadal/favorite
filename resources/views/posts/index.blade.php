@extends('layouts.app') @section('content')

<section class="section">
    <div class="container">
        <h1 class="title is-1">All Posts.</h1>
        @forelse ($posts as $post)
        <div class="card my-3">
            <div class="card-content">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <p class="title is-4">{{ $post->title }}</p>
                            {{ $post->body }}
                        </div>
                    </div>
                    <div class="media-right">
                        @if (Auth::check())
                        <favorite :post={{ $post->id }} :favorited={{ $post->favorited() ? 'true' : 'false' }} >
                        </favorite>
                        @endif
                    </div>
                </article>
            </div>
        </div>
        @empty
        <p>No post created.</p>
        @endforelse
        <div class="mt-6">
            {{ $posts->links('vendor.pagination.bulma') }}
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Laravel fav app</strong> by Coed.
            </p>
        </div>
    </div>
</footer>

@endsection