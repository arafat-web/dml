@extends('admin.layout.app')
@section('title', 'SEO')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between align-center mb-3">
                <h3 class="card-title">SEO List</h3>
                <a href="{{ route('admin.seo.create') }}" class="btn btn-primary">+ Create</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        <th>Author</th>
                        <th>Page Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seos as $seo)
                        <tr>
                            <td>{{ $seo->title }}</td>
                            <td>{{ $seo->description }}</td>
                            <td>{{ $seo->keywords }}</td>
                            <td>{{ $seo->author }}</td>
                            <td>{{ $seo->page_name }}</td>
                            <td>
                                <a href="{{ route('admin.seo.edit', $seo->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('admin.seo.destroy', $seo->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

