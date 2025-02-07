@extends('admin.layout.app')
@section('title', 'SEO')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>SEO Details</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td>{{ $seo->title }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $seo->description }}</td>
                </tr>
                <tr>
                    <th>Keywords</th>
                    <td>{{ $seo->keywords }}</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{ $seo->author }}</td>
                </tr>
                <tr>
                    <th>Page Name</th>
                    <td>{{ $seo->page_name }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
