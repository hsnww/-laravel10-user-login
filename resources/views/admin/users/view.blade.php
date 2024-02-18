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
                        <h5 class="card-title">Clean list group</h5>
                        <p>Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>

                        <!-- List group with active and disabled items -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Name : {{ $user->name }}</li>
                            <li class="list-group-item">Email : {{ $user->email }}</li>
                            <li class="list-group-item">Registerd at : {{ $user->created_at }}</li>
                            <li class="list-group-item">Last update : {{ $user->updated_at }}</li>
                            <li class="list-group-item">Roles :
                                @foreach($roles as $role)

                                    <div class="form-check">
                                        <label class="form-check-label" for="role{{ $role->id }}">
                                            {{ $role->name }}
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="role{{ $role->id }}" value="{{ $role->id }}"
                                               @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif disabled>
                                    </div>

                                @endforeach
                            </li>
                        </ul><!-- End Clean list group -->

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
