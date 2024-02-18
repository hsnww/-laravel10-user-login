@extends('layouts.dashboard')

@section('pageTitle')
    <div class="pagetitle">
        <h1>All users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
    </div>
@endsection

@section('section')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Horizontal Form</h5>
                        <form action="{{ route('admin.users.store') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" value="">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                                    @enderror
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Roles</legend>
                                <div class="col-sm-10">
                                    @foreach($roles as $role)
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="checkbox"  name="roles[]" id="role{{ $role->id }}" value="{{ $role->id }}">
                                        <label class="form-check-label" for="gridRadios3">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </fieldset>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
