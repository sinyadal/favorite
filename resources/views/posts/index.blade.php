@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-4 mb-4">All Posts</h3>

            @forelse ($posts as $post)

            <div class="card mb-3">
                <div class="card-content">
                    @if (Auth::check())
                    <i class="material-icons is-pulled-right">favorite_border</i>
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
    </div>
</div>

<div class="container">
    <div class="columns">
        <div class="column">
            <forma></forma>
        </div>
        <div class="card">
            <div class="card-content">
                <snackbar></snackbar>
            </div>
        </div>
    </div>
</div>

@endsection