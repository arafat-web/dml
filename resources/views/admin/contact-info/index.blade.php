@extends('admin.layout.app')
@section('title', 'Update Contact Info')

@section('content')
    <div class="card m-auto" style="max-width: 800px; width: 100%;">
        <div class="card-header">
            <h3>Update Contact Info</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contact-info.update', $contactInfo->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"
                        value="{{ old('phone', $contactInfo->phone) }}">
                    <span class="text-danger font-12">{{ $errors->first('phone') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                        value="{{ old('email', $contactInfo->email) }}">
                    <span class="text-danger font-12">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address"
                        value="{{ old('address', $contactInfo->address) }}">
                    <span class="text-danger font-12">{{ $errors->first('address') }}</span>
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter Facebook URL"
                        value="{{ old('facebook', $contactInfo->facebook) }}">
                    <span class="text-danger font-12">{{ $errors->first('facebook') }}</span>
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Enter Twitter URL"
                        value="{{ old('twitter', $contactInfo->twitter) }}">
                    <span class="text-danger font-12">{{ $errors->first('twitter') }}</span>
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Enter Instagram URL"
                        value="{{ old('instagram', $contactInfo->instagram) }}">
                    <span class="text-danger font-12">{{ $errors->first('instagram') }}</span>
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Enter LinkedIn URL"
                        value="{{ old('linkedin', $contactInfo->linkedin) }}">
                    <span class="text-danger font-12">{{ $errors->first('linkedin') }}</span>
                </div>
                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Enter Whatsapp number"
                        value="{{ old('whatsapp', $contactInfo->whatsapp) }}">
                    <span class="text-danger font-12">{{ $errors->first('whatsapp') }}</span>
                </div>
                <div class="form-group">
                    <label for="telegram">Telegram</label>
                    <input type="text" class="form-control" name="telegram" id="telegram" placeholder="Enter Telegram username"
                        value="{{ old('telegram', $contactInfo->telegram) }}">
                    <span class="text-danger font-12">{{ $errors->first('telegram') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

