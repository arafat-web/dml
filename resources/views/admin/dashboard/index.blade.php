@extends('admin.layout.app')
@section('title', 'Dashboard')

@section('content')
    <div class='card'>
        <div class='card-header'>
            <i class='fas fa-users'></i> Total Users
        </div>
        <div class='card-value'>1,234</div>
    </div>
    <div class='card'>
        <div class='card-header'>
            <i class='fas fa-shopping-cart'></i> Orders
        </div>
        <div class='card-value'>56</div>
    </div>
    <div class='card'>
        <div class='card-header'>
            <i class='fas fa-chart-line'></i> Revenue
        </div>
        <div class='card-value'>$45.2K</div>
    </div>
    <div class='card'>
        <div class='card-header'>
            <i class='fas fa-ticket-alt'></i> Support Tickets
        </div>
        <div class='card-value'>23</div>
    </div>
@endsection
