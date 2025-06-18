<?php

namespace App\Http\Controllers\Tracking;

use App\Http\Controllers\Controller;
use App\Models\PrintedDoc;
use App\Models\Tracking;
use App\Models\TravelHistory;
use Illuminate\Http\Request;

class TrackingDetailsController extends Controller
{

    public function Invoice($id)
    {
        $tracking = Tracking::where('id', $id)->first();
        $invoice = PrintedDoc::where('tracking_id', $id)->first();
        return view('frontend.invoice', compact('tracking', 'invoice'));
    }

    public function TrackingInfo()
    {
        return view('frontend.tracking_info');
    }

    public function TrackShipment(Request $request)
    {
        $requestedShipment = $request->tracking_no;
        $trackingDetails = Tracking::where('tracking_no', $requestedShipment)->first();

        if (!$trackingDetails) {
            return back()->with('error', 'Invalid Tracking Number');
        }

        $invoice = PrintedDoc::where('tracking_id', $trackingDetails->id)->first();

        $trackingHistoryDetails = TravelHistory::where('tracking_id', $trackingDetails->id)
            ->orderBy('created_at', 'desc')
            ->first();

        $travelHistory = TravelHistory::where('tracking_id', $trackingDetails->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.tracking_info', compact('trackingDetails', 'trackingHistoryDetails', 'travelHistory', 'invoice'));
    }
}
