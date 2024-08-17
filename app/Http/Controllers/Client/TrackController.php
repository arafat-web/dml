<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('number')) {
            $trackNumber = $request->number;
            $response = Http::get('http://localhost/dml-backend/public/api/track?number=' . $trackNumber);

            if ($response->successful()) {
                $bookingService = $response['booking']['service']['service'];
                $awbNumber = $response['booking']['service']['awn'];

                if ($bookingService === 'DPD') {
                    $result = Http::get('https://apis.track.dpd.co.uk/v1/parcels/' . $awbNumber . '*20665/parcelevents');
                } else if ($bookingService === 'DHL') {
                    $result = Http::get('https://api.dhl.com/track/shipments?trackingNumber=' . $awbNumber . '&find_by=tracking_number');
                } else {
                    $result = null;
                }
            } else {
                $response = null;
                $bookingService = null;
                $awbNumber = null;
                $result = null;
            }
        } else {
            $trackNumber = '';
            $response = null;
            $bookingService = null;
            $awbNumber = null;
            $result = null;
        }
        return view('client.track.track', compact('response', 'trackNumber', 'bookingService', 'awbNumber', 'result'));
    }

}
