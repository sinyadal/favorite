@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-4 mb-4">Your Favorite</h3>

            @forelse ($myFavorites as $myFavorite)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $myFavorite->title }}</h5>
                    {{ $myFavorite->body }}
                </div>

                @if (Auth::check())
                <div class="card-footer">
                    <favorite 
                        :post={{ $myFavorite->id }} 
                        :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }} >
                    </favorite>
                </div>
                @endif
            </div>

            @empty
            
            <p>You have no favorite posts.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection