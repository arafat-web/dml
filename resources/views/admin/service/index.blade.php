@extends('admin.layout.app')
@section('title', 'Services')

@section('content')
    <div class="dash-content">
        <div aria-label="breadcrumb">
            <div class="title mt-4 mb-0">
                <h3 class="m-0 fw-normal">Dashboard</h3>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> <i class="uil uil-estate"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title">Services</h5>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">+ Create</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{ $service->id }}</th>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.services.edit', $service->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('admin.services.destroy', $service->id) }}"
                                            class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
