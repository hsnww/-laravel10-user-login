@extends('layouts.dashboard')

@section('section')

    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Notifications</li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </nav>
    </div>

    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">All notifications</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach($notifications_types as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->created_at->format('M-Y') }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>


    </div>
@endsection
