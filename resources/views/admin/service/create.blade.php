@extends('admin.layout.app')
@section('title', 'Services')

@section('content')
    <div class="dash-content">
        <div aria-label="breadcrumb">
            <div class="title mt-4 mb-0">
                <h3 class="m-0 fw-normal">Services</h3>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> <i class="uil uil-estate"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </div>
        <div class="container">
            <div class="card m-auto" style="max-width: 800px">
                <div class="card-body">
                    <h5 class="card-title">Create Service</h5>
                    <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Enter name" value="{{ old('name') }}" required>
                            <span class="text-danger font-12">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" class="form-control" name="icon" id="icon"
                                placeholder="Enter icon" value="{{ old('icon') }}" required>
                            <span class="text-danger font-12">{{ $errors->first('icon') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug"
                                placeholder="Enter slug" value="{{ old('slug') }}" required>
                            <span class="text-danger font-12">{{ $errors->first('slug') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="short_description" class="form-label">Short Description</label>
                            <input type="text" class="form-control" name="short_description" id="short_description"
                                placeholder="Enter short description" value="{{ old('short_description') }}" required>
                            <span class="text-danger font-12">{{ $errors->first('short_description') }}</span>
                        </div>
                        <div class="form-group"> 
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description"
                                required>{{ old('description') }}</textarea>
                            <span class="text-danger font-12">{{ $errors->first('description') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="active" class="form-label">Active</label>
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
        </div>
    </div>
@endsection
