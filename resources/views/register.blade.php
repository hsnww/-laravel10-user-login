@extends('layouts.auth')

@section('form')
    <div class="card mb-3">

        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
            </div>

            <form class="row g-3"  method="POST" action="{{ route('register') }}">
                @csrf

                <div class="col-12">
                    <label for="yourName" class="form-label">{{ __('Name') }}</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="yourName" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="yourEmail" class="form-label">{{ __('Email') }}</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="yourEmail" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div class="col-12">
                    <label for="yourPassword" class="form-label">{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="yourPassword" class="form-label">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms">
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0"> {{ __('Already registered?') }}  <a href="{{ route('login') }}">Log in</a></p>
                </div>
            </form>

        </div>
    </div>

@endsection
