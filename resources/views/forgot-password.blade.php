@extends('layouts.auth')

@section('form')
    <div class="card mb-3">

        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Forget Password</h5>
                <p class="text-center small">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
            </div>
            @if(Session::has('status'))
                <div class="alert alert-success" role="alert">
                    <p>{{ Session::get('status') }}</p>
                </div>
            @endif
            <form class="row g-3" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="col-12">
                    <label for="yourUsername" class="form-label">{{ __('Email') }}</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror

                    </div>
                </div>


                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit"> {{ __('Email Password Reset Link') }}</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Rememberd your password? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </form>

        </div>
    </div>

@endsection
