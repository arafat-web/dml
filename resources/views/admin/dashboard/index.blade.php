@extends('admin.layout.app')
@section('title', 'Dashboard')

@section('content')
    <div class="dash-content">
        <div aria-label="breadcrumb">
            <div class="title mt-4 mb-0">
                
                <h3 class="m-0 fw-normal">Dashboard</h3>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> <i class="uil uil-estate"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
        <div class="overview">
            <div class="boxes">
                <div class="box box1">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="text">Total Visit</span>
                    <span class="number">50</span>
                </div>
                <div class="box box2">
                    <i class="uil uil-comments"></i>
                    <span class="text">Total Pages</span>
                    <span class="number">5</span>
                </div>
                <div class="box box3">
                    <i class="uil uil-share"></i>
                    <span class="text">Total Services</span>
                    <span class="number">110</span>
                </div>
            </div>
        </div>
    </div>
@endsection
