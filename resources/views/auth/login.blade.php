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
                                <input class="is-checkradio" id="exampleCheckboxNormal" type="checkbox" name="exampleCheckboxNormal" checked="checked">
                                <label class="mx-0" for="exampleCheckboxNormal">Checkbox</label>
                            </div>

                            <div class="field">
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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required> @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection