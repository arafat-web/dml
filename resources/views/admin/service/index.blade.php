@extends('admin.layout.app')
@section('title', 'Services')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between align-center mb-3">
                <h3>Services List</h3>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">+ Create</a>
            </div>
        </div>
        <div class="card-body">
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
                                <td scope="row">{{ $service->id }}</td>
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
@endsection
