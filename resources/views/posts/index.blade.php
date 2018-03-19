@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-4 mb-4">All Posts</h3>

            @forelse ($posts as $post)

            <div class="card mb-3">
                <div class="card-content">
                    <i class="material-icons is-pulled-right">favorite_border</i>
                    <p class="title is-4">Lorem ipsum dolor sit amet.</p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aperiam!
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aperiam!
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    {{ $post->body }}
                </div>

                @if (Auth::check())
                <div class="card-footer">
                    <favorite :post={{ $post->id }} :favorited={{ $post->favorited() ? 'true' : 'false' }} >
                    </favorite>
                </div>
                @endif

            </div>

            @empty

            <p>No post created.</p>

            @endforelse {{ $posts->links() }}
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