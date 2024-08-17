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
            $response = Http::get("https://console.dml.com.bd/api/track?number=$trackNumber");

            if ($response->successful()) {
                $bookingService = $response['booking']['service']['service'];
                $awbNumber = $response['booking']['service']['awn'];

                if ($bookingService === 'DPD') {
                    $result = Http::get("https://apis.track.dpd.co.uk/v1/parcels/$awbNumber*20665/parcelevents");
                } else if ($bookingService === 'DHL') {
                    $result = Http::get("https://api.dhl.com/track/shipments?trackingNumber=$awbNumber&find_by=tracking_number");
                } else if ($bookingService === 'FEDEX') {
                    try {
                        $getResponse = Http::asForm()->post('https://apis-sandbox.fedex.com/oauth/token', [
                            'grant_type' => 'client_credentials',
                            'client_id' => 'l76100da90e51b475fb5856c6c1e406d69',
                            'client_secret' => '4dba4de2bffc4550ab3713ca43a5008f'
                        ]);

                        $authToken = $getResponse->json();
                        $authToken = $authToken['access_token'];

                        $result = Http::withHeaders([
                            'Authorization' => "Bearer $authToken",
                            'X-locale' => 'en_US',
                            'Content-Type' => 'application/json'
                        ])->post('https://apis-sandbox.fedex.com/track/v1/trackingnumbers', [
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
                } else if ($bookingService === 'UPS') {
                    try {
                        // Get the UPS OAuth token
                        $upsAuthTokenResponse = Http::asForm()->post('https://www.ups.com/security/v1/oauth/token', [
                            'grant_type' => 'client_credentials',
                            'client_id' => 'eQmN5LckNoF1yPuCqwGDSYckZS0V2lQGrgnFzNAAlf0eSGEN',
                            'client_secret' => 'A6ryNTb68TpAEQpkB3Gc8kV4QZdz734xz7cea1YUZqfnuUqDqCOaAQKVNCF1AcSd',
                        ]);

                        $upsAuthToken = $upsAuthTokenResponse->json()['access_token'];

                        // Get the UPS tracking details
                        $result = Http::withHeaders([
                            'Authorization' => "Bearer $upsAuthToken",
                            'transId' => uniqid(), // or another unique identifier
                            'transactionSrc' => 'YourAppName',
                        ])->get("https://www.ups.com/track/v1/details/$awbNumber");

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
