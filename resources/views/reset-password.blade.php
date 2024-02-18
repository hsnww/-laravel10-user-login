@extends('layouts.auth')

@section('form')
    <div class="card mb-3">

        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Reset your password</h5>
                <p class="text-center small">Enter your new password to reset</p>
            </div>

            <form class="row g-3" method="POST" action="{{ route('password.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="col-12">
                    <label for="yourUsername" class="form-label">{{ __('Email') }}</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $request->email) }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <label for="yourPassword" class="form-label">{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="yourPassword">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="yourPassword" class="form-label">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" class="form-control" >

                </div>


                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">{{ __('Reset Password') }}</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="{{ url('/Login') }}">Go to login page</a></p>
                </div>
            </form>

        </div>
    </div>

@endsection
