@extends('admin.layout.app')
@section('title', 'Services')
@push('styles')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
@endpush
@section('content')
    <div class="card m-auto" style="max-width: 800px">
        <div class="card-header">
            <h3>Create Service</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                        value="{{ old('name') }}" required>
                    <span class="text-danger font-12">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter icon"
                        value="{{ old('icon') }}" required>
                    <span class="text-danger font-12">{{ $errors->first('icon') }}</span>
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug"
                        value="{{ old('slug') }}" required>
                    <span class="text-danger font-12">{{ $errors->first('slug') }}</span>
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" class="form-control" name="short_description" id="short_description"
                        placeholder="Enter short description" value="{{ old('short_description') }}" required>
                    <span class="text-danger font-12">{{ $errors->first('short_description') }}</span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description"
                        >{{ old('description') }}</textarea>
                    <div class="form-group">
                        <span class="text-danger font-12">{{ $errors->first('description') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="active">Active</label>
                        <select class="form-control" name="active" id="active" required>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <span class="text-danger font-12">{{ $errors->first('active') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 200
            });
        });
    </script>
@endpush
