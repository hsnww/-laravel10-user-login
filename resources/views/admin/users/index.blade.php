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
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <p class="float-end"><a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm mt-3">Create new</a></p>
                        <h5 class="card-title">Table with stripped rows</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Register Date</th>
                                <th colspan="3">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>@foreach($user->roles as $role) [{{ $role->name }}]@endforeach</td>
                                <td>{{ $user->created_at }}</td>
                                <td><a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary btn-sm">view</a></td>
                                <td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">edit</a></td>
                                <td>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return(confirm('حذف المستخدم المحدد {{$user->name}} نهائياً'))">
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                        {{ $users->links() }}

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
