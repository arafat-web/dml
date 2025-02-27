@extends('client.layout.app')

@section('title', "Track Package - {{ $trackNumber }}")


@section('content')
    <section class="section d-block pt-5">
        <div class="container position-relative">
            <div class="banner-trackyourparcel"></div>
            <div class="box-info-trackyourparcel text-center mb-5">
                <h2 class="color-brand-2 mb-3 wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn; font-weight: 700; font-size: 2.5rem;">
                    Professional Package Tracking
                </h2>
                <p class="color-grey-900 font-md wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn; font-size: 1.1rem;">
                    Track your international shipments with ease and confidence. Enter your tracking number below.
                </p>
                <div class="form-trackparcel wow animate__ animate__fadeIn animated mt-4"
                    style="visibility: visible; animation-name: fadeIn;">
                    <form method="GET" class="tracking-form">
                        <div class="form-group d-flex align-items-center justify-content-center">
                            <input
                                style="border: 2px solid #FEC201; border-radius: 30px; padding: 15px 20px; font-size: 1.1rem;"
                                id="number" value="{{ $trackNumber }}" name="number" class="form-control"
                                type="text" placeholder="Enter your tracking number" spellcheck="false" required>
                            <button id="track-btn" class="btn btn-brand-1 btn-track ml-3" type="submit"
                                style="font-size: 1.1rem; border-radius: 30px;">
                                Track Package
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div style="max-width: 1000px; margin: 0 auto; margin-bottom: 20px;" id="tracking-result">
                @if (!empty($response))
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-brand-1 text-white text-center" style="border-radius: 10px 10px 0 0;">
                            <h5 class="mb-0" style="font-size: 1.5rem; font-weight: 600; color: #034460">
                                Tracking Details: {{ $trackNumber }}
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Shipper:</strong> {{ $response['booking']['sender']['name'] }}</p>
                                    <p><strong>Country of Manufacture:</strong>
                                        {{ $response['booking']['country_of_manufacture'] }}</p>
                                    <p><strong>Post Code:</strong> {{ $response['booking']['sender']['post_code'] }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Consignee:</strong>
                                        {{ $response['booking']['receiver']['name'] }}
                                    </p>
                                    <p><strong>Destination:</strong>
                                        {{ $response['booking']['receiver']['address'] }},
                                        {{ $response['booking']['receiver']['city'] }},
                                        {{ $response['booking']['receiver']['country_code'] }}
                                    </p>
                                    <p><strong>Zip Code:</strong>
                                        {{ $response['booking']['receiver']['post_code'] }}
                                    </p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <p><strong>Service:</strong> {{ $response['trakingUrl']['name'] }}</p>
                                    <p><strong>AWB:</strong> {{ $response['booking']['service']['awn'] ?? 'N/A' }}</p>
                                    <p><strong>Run:</strong> {{ $response['booking']['service']['run_no'] ?? 'N/A' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Packages:</strong> {{ $response['booking']['packages'] }}</p>
                                    <p><strong>Weights:</strong> {{ $response['booking']['weights'] }} kg</p>
                                    <p><strong>Items:</strong> {{ $response['booking']['items'] }}</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <p><strong>Service Provider:</strong> {{ $response['trakingUrl']['name'] }} </p>
                                    <p><strong>Address:</strong> </p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Email:</strong></p>
                                    <p><strong>Phone:</strong> </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- {{ \Carbon\Carbon::parse($response['booking']['created_at'])->DiffForHumans() }} --}}
                    <p class="status_txt text-center mt-3">
                        Shipment Connected With {{ $response['trakingUrl']['name'] ?? 'N/A' }} with Ref
                        #<span class="ref_num">{{ $response['booking']['service']['awn'] }}</span>
                        <a target="_blank" style="color: #0073e6;" href="{{ $response['trakingUrl']['url'] ?? '' }}">
                            view at {{ $response['booking']['service']['service'] ?? 'N/A' }} website
                            <i class="glyphicon glyphicon-new-window"></i>
                        </a>
                    </p>
                @else
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4 text-center">
                            <p>No tracking information available.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- New Section: Tracking Details -->
    <section style="max-width: 1000px; margin: 0 auto" class="section d-block">
        <div class="container p-0">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-brand-1 text-white text-center">
                    <h5 class="mb-0" style="font-size: 1.5rem; font-weight: 600; color: #034460">Tracking Result</h5>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light d-md-table-header-group">
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Last Location</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($bookingService === 'DPD' && isset($result['data']))
                                    @foreach ($result['data'] as $event)
                                        <tr class="d-block d-md-table-row">

                                            <td data-label="Date" class="d-block d-md-table-cell">
                                                {{ \Carbon\Carbon::parse($event['eventDate'])->format('Y-m-d') }}</td>
                                            <td data-label="Time" class="d-block d-md-table-cell">{{ $event['eventTime'] }}
                                            </td>
                                            <td data-label="Status" class="d-block d-md-table-cell">
                                                {{ $event['eventText'] }}</td>
                                            <td data-label="Location" class="d-block d-md-table-cell">
                                                {{ $event['eventLocation'] }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                @if ($bookingService === 'FEDEX' && isset($result['output']['completeTrackResults']))
                                    @foreach ($result['output']['completeTrackResults'][0]['trackResults'][0]['scanEvents'] as $event)
                                        <tr class="d-block d-md-table-row">
                                            <td data-label="Date" class="d-block d-md-table-cell">
                                                {{ \Carbon\Carbon::parse($event['date'])->format('Y-m-d') }}</td>
                                            <td data-label="Time" class="d-block d-md-table-cell">
                                                {{ \Carbon\Carbon::parse($event['date'])->format('H:i:s') }}</td>
                                            <td data-label="Location" class="d-block d-md-table-cell">
                                                {{ $event['scanLocation']['city'] ?? 'N/A' }},
                                                {{ $event['scanLocation']['stateOrProvinceCode'] ?? 'N/A' }}</td>
                                            <td data-label="Status" class="d-block d-md-table-cell">
                                                {{ $event['eventDescription'] }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                @if (isset($response['booking']['statuses']) && count($response['booking']['statuses']) > 0)
                                    @foreach ($response['booking']['statuses'] as $status)
                                        <tr class="d-block d-md-table-row">
                                            <td data-label="Status" class="d-block d-md-table-cell">
                                                {{ $status['activities'] }}</td>
                                            <td data-label="Last Location" class="d-block d-md-table-cell">
                                                {{ $status['location'] }}</td>
                                            <td data-label="Date and Time" class="d-block d-md-table-cell">
                                                {{ \Carbon\Carbon::parse($status['date_time'])->format('Y-m-d H:i:s') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="text-center">No tracking details available.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: #FEC201;
        }

        .card {
            border-radius: 10px;
        }

        .card-header {
            border-radius: 10px 10px 0 0;
        }

        .table-responsive table {
            width: 100%;
        }

        .table td,
        .table th {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Mobile styling for vertical format */
        @media (max-width: 767px) {
            .d-md-table-header-group {
                display: none;
            }

            .d-block {
                display: block;
            }

            .d-md-table-cell {
                display: block;
                width: 100%;
                padding: 0.75rem 1.25rem;
                margin-bottom: 0.5rem;
                border: none;
                border-bottom: 1px solid #e9ecef;
            }

            .d-md-table-cell:before {
                content: attr(data-label);
                font-weight: bold;
                display: inline-block;
                margin-right: 0.5rem;
            }

            .table-responsive {
                border: 0;
            }

            .table {
                border: 0;
            }

            .table thead {
                display: none;
            }
        }
    </style>
@endpush
