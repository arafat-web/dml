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
            $response = Http::get("http://127.0.0.1:8000/api/track?number=$trackNumber");

            if ($response->successful()) {
                $bookingService = $response['booking']['service']['service'];
                $awbNumber = $response['booking']['service']['awn'];

                if ($bookingService === 'DPD') {
                    $result = Http::get("https://apis.track.dpd.co.uk/v1/parcels/$awbNumber*20665/parcelevents");
                } else if ($bookingService === 'DHL') {
                    $result = Http::get("https://api.dhl.com/track/shipments?trackingNumber=$awbNumber&find_by=tracking_number");
                } else if ($bookingService === 'FEDEX') {
                    try {
                        $getResponse = Http::asForm()->post('https://apis.fedex.com/oauth/token', [
                            'grant_type' => 'client_credentials',
                            'client_id' => 'l7e593a1ae415343689a5c4c4a5405bf06',
                            'client_secret' => '88743b1256f642498ae9cf291a062d39'
                        ]);

                        $authToken = $getResponse->json();
                        $authToken = $authToken['access_token'];

                        $result = Http::withHeaders([
                            'Authorization' => "Bearer $authToken",
                            'X-locale' => 'en_US',
                            'Content-Type' => 'application/json'
                        ])->post('https://apis.fedex.com/track/v1/trackingnumbers', [
                            'trackingInfo' => [
                                [
                                    'trackingNumberInfo' => [
                                        'trackingNumber' => $awbNumber
                                    ]
                                ]
                            ],
                            'includeDetailedScans' => true
                        ]);
                    } catch (\Exception $ex) {
                        echo $ex->getMessage();
                    }
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
