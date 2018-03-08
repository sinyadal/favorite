@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-4 mb-4">All Posts</h3>

            @forelse ($posts as $post)

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    {{ $post->body }}
                </div>

                @if (Auth::check())
                <div class="card-footer">
                    <favorite 
                        :post={{ $post->id }} 
                        :favorited={{ $post->favorited() ? 'true' : 'false' }} >
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

@endsection