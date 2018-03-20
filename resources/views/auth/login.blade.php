@extends('layouts.app') @section('content')

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <h1 class="title is-1">Sign In.</h1>
                <div class="card">
                    <div class="card-content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input type="text" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email">
                                </div>
                                @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control">
                                    <input type="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password">
                                </div>
                                @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me</a>
                                    </label>
                                </div>
                            </div>

                            <div class="field mt-3">
                                <button class="button is-primary">Sign In</button>
                                <a href="{{ route('password.request') }}" class="button is-outlined is-pulled-right">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection