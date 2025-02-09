@extends('admin.layout.app')
@section('title', 'Statistics')
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endpush
@section('content')
    <div>
        <div class="card mt-3 border-0 shadow-sm">
            <div class="card-header bg-white">
                <div class="flex justify-between align-center mb-3">
                    <h3>Statistics</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title
                                    text-muted">Todays Visitors</h5>
                                <h3 class="card-text">{{ $todayVisitors }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title
                                    text-muted">This Month Visitors</h5>
                                <h3 class="card-text">{{ $thisMonthVisitors }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title
                                    text-muted">This Year Visitors</h5>
                                <h3 class="card-text">{{ $thisYearVisitors }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title
                                    text-muted">Total Visitors</h5>
                                <h3 class="card-text">{{ $totalVisitors }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 border-0 shadow-sm">
            <div class="card-header bg-white">
                <div class="flex justify-between align-center mb-3">
                    <h3>Visitors</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">IP</th>
                                <th scope="col">Header</th>
                                <th scope="col">Page</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allVisitors as $visitor)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $visitor->ip_address }}</td>
                                    <td>{{ $visitor->user_agent }}</td>
                                    <td>
                                        <span class="date">{{ $visitor->created_at->format('D M, Y') }}</span>
                                        <span class="time-elapsed text-muted">({{ $visitor->created_at->diffForHumans() }})</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $allVisitors->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush
