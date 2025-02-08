@extends('admin.layout.app')
@section('title', 'SEO')

@section('content')
    <div class="card m-auto" style="max-width: 800px">
        <div class="card-header">
            <h3>Create SEO</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.seo.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                        value="{{ old('title') }}" required>
                    <span class="text-danger font-12">{{ $errors->first('title') }}</span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="5"
                        cols="80" required>{{ old('description') }}</textarea>
                    <span class="text-danger font-12">{{ $errors->first('description') }}</span>
                </div>
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" class="form-control" name="keywords" id="keywords" placeholder="Enter keywords"
                        value="{{ old('keywords') }}" required>
                    <span class="text-danger font-12">{{ $errors->first('keywords') }}</span>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author" id="author" value="DML Worldwide Express" readonly required>
                </div>
                <div class="form-group">
                    <label for="page_name">Page Name</label>
                    <select class="form-control" name="page_name" id="page_name" required>
                        <option value="">Select Page Name</option>
                        <option value="home">Home</option>
                        <option value="about">About</option>
                        <option value="process">Process</option>
                        <option value="services">Services</option>
                    </select>
                    <span class="text-danger font-12">{{ $errors->first('page_name') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
