@extends('layouts.app') @section('content')

<section class="section">
        <div class="container">
            <h1 class="title is-1">All Favorite Posts.</h1>
            @forelse ($myFavorites as $myFavorite)
            <div class="card my-3">
                <div class="card-content">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <p class="title is-4">{{ $myFavorite->title }}</p>
                                {{ $myFavorite->body }}
                            </div>
                        </div>
                        <div class="media-right">
                            @if (Auth::check())
                            <favorite 
                                :post={{ $myFavorite->id }} 
                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }} >
                            </favorite>
                            @endif
                        </div>
                    </article>
                </div>
            </div>
            @empty
            <p>No favorite post created.</p>
            @endforelse

        </div>
    </section>
@endsection