<?php

namespace App\Http\Controllers\Tracking;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use App\Models\TravelHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function CreateShipment()
    {
        return view('admin.tracking.create_tracking');
    }

    public function StoreShipment(Request $request)
    {
        $request->validate([
            'shipper_fullname' => 'required',
            'shipper_gender' => 'required',
            'shipper_phone' => 'required',
            'shipper_email' => 'required|email',
            'shipper_address' => 'required',
            'shipper_state' => 'required',
            'shipper_postal' => 'required',
            'shipper_country' => 'required',
            'receiver_fullname' => 'required',
            'receiver_gender' => 'required',
            'receiver_phone' => 'required',
            'receiver_email' => 'required',
            'receiver_address' => 'required',
            'receiver_state' => 'required',
            'receiver_postal' => 'required',
            'receiver_country' => 'required',
            'tracking_no' => 'required',
            'freight_type' => 'required',
            'shipment_content' => 'required',
            'shipment_desc' => 'required',
            'shipment_quantity' => 'required',
            'shipment_weight' => 'required',
            'shipment_status' => 'required',
            'take_off' => 'required',
            'final_destination' => 'required',
            'date_shipped' =>  'required',
            'time_shipped' => 'required',
            'expected_delivery_date' => 'required',
            'expected_delivery_time' => 'required',
            'actual_delivery_date' => 'required',
            'actual_delivery_time' => 'required',
            'travel_history_location' => 'required',
            'travel_history_date' => 'required',
            'travel_history_time' => 'required',
            'travel_history_description' => 'required',
        ]);

        $trackingId = Tracking::insertGetId([
            'shipper_fullname' => $request->shipper_fullname,
            'shipper_email' => $request->shipper_email,
            'shipper_phone' => $request->shipper_phone,
            'shipper_address' => $request->shipper_address,
            'shipper_gender' => $request->shipper_gender,
            'shipper_state' => $request->shipper_state,
            'shipper_country' => $request->shipper_country,
            'shipper_postal' => $request->shipper_postal,

            'receiver_fullname' => $request->receiver_fullname,
            'receiver_email' => $request->receiver_email,
            'receiver_phone' => $request->receiver_phone,
            'receiver_address' => $request->receiver_address,
            'receiver_gender' => $request->receiver_gender,
            'receiver_state' => $request->receiver_state,
            'receiver_country' => $request->receiver_country,
            'receiver_postal' => $request->receiver_postal,

            'tracking_no' => $request->tracking_no,
            'freight_type' => $request->freight_type,
            'shipment_content' => $request->shipment_content,
            'shipment_desc' => $request->shipment_desc,
            'shipment_quantity' => $request->shipment_quantity,
            'shipment_weight' => $request->shipment_weight,
            'shipment_status' => $request->shipment_status,
            'take_off' => $request->take_off,
            'final_destination' => $request->final_destination,
            'date_shipped' => $request->date_shipped,
            'time_shipped' => $request->time_shipped,
            'expected_delivery_date' => $request->expected_delivery_date,
            'expected_delivery_time' => $request->expected_delivery_time,
            'actual_delivery_date' => $request->actual_delivery_date,
            'actual_delivery_time' => $request->actual_delivery_time,
            'created_at' => Carbon::now(),
        ]);

        TravelHistory::insert([
            'tracking_id' => $trackingId,
            'travel_history_date' => $request->travel_history_date,
            'travel_history_time' => $request->travel_history_time,
            'travel_history_description' => $request->travel_history_description,
            'travel_history_location' => $request->travel_history_location,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Shipment Added Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function AllShipment()
    {
        $trackingData = Tracking::latest()->get();
        return view('admin.tracking.all_tracking', compact('trackingData'));
    }

    public function DeleteShipment($id)
    {

        Tracking::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Shipment Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditShipment($id)
    {

        $editData = Tracking::findOrFail($id);
        return view('admin.tracking.edit_tracking', compact('editData'));
    }

    public function UpdateShipment(Request $request)
    {
        $shipId = $request->id;

        Tracking::findOrFail($shipId)->update([
            'shipper_fullname' => $request->shipper_fullname,
            'shipper_email' => $request->shipper_email,
            'shipper_phone' => $request->shipper_phone,
            'shipper_address' => $request->shipper_address,
            'shipper_gender' => $request->shipper_gender,
            'shipper_state' => $request->shipper_state,
            'shipper_country' => $request->shipper_country,
            'shipper_postal' => $request->shipper_postal,

            'receiver_fullname' => $request->receiver_fullname,
            'receiver_email' => $request->receiver_email,
            'receiver_phone' => $request->receiver_phone,
            'receiver_address' => $request->receiver_address,
            'receiver_gender' => $request->receiver_gender,
            'receiver_state' => $request->receiver_state,
            'receiver_country' => $request->receiver_country,
            'receiver_postal' => $request->receiver_postal,

            'tracking_no' => $request->tracking_no,
            'freight_type' => $request->freight_type,
            'shipment_content' => $request->shipment_content,
            'shipment_desc' => $request->shipment_desc,
            'shipment_quantity' => $request->shipment_quantity,
            'shipment_weight' => $request->shipment_weight,
            'shipment_status' => $request->shipment_status,
            'take_off' => $request->take_off,
            'final_destination' => $request->final_destination,
            'date_shipped' => $request->date_shipped,
            'time_shipped' => $request->time_shipped,
            'expected_delivery_date' => $request->expected_delivery_date,
            'expected_delivery_time' => $request->expected_delivery_time,
            'actual_delivery_date' => $request->actual_delivery_date,
            'actual_delivery_time' => $request->actual_delivery_time,
        ]);

        $notification = array(
            'message' => 'Shipment Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditStatus()
    {
        $statusData = Tracking::latest()->get();
        return view('admin.tracking.shipment_status', compact('statusData'));
    }

    public function UpdateStatus(Request $request)
    {
        $statusId = $request->id;
        Tracking::findOrFail($statusId)->update([
            'shipment_status' => $request->shipment_status
        ]);

        $notification = array(
            'message' => 'Status Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function NewShipmentStatus($id)
    {
        $shipmentStatus = Tracking::findOrFail($id);
        return view('admin.tracking.edit_shipment_status', compact('shipmentStatus'));
    }

    public function TravelHistory(Request $request)
    {
        $trackings = Tracking::with('travelHistory')->get();

        return view('admin.tracking.travel_history_data', compact('trackings'));
    }

    public function AddHistory(Request $request, $id)
    {
        $tracking = Tracking::where('id', $id)->first();
        $travelHistories = TravelHistory::where('tracking_id', $id)->latest()->get();

        return view('admin.tracking.add_history', compact('travelHistories', 'tracking'));
    }

    public function insertHistory(Request $request)
    {
        $request->validate([
            'travel_history_date' => 'required',
            'travel_history_time' => 'required',
            'travel_history_description' => 'required',
            'travel_history_location' => 'required',
        ]);

        TravelHistory::insert([
            'tracking_id' => $request->tracking_id,
            'travel_history_date' => $request->travel_history_date,
            'travel_history_time' => $request->travel_history_time,
            'travel_history_description' => $request->travel_history_description,
            'travel_history_location' => $request->travel_history_location,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Travel History Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditHistory($id)
    {
        $travelData = TravelHistory::findOrFail($id);
        return view('admin.tracking.edit_travel_history', compact('travelData'));
    }

    public function UpdateHistory(Request $request)
    {
        $historyId = $request->id;
        TravelHistory::findOrFail($historyId)->update([
            'travel_history_date' => $request->travel_history_date,
            'travel_history_time' => $request->travel_history_time,
            'travel_history_description' => $request->travel_history_description,
            'travel_history_location' => $request->travel_history_location,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        $notification = array(
            'message' => 'History Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DeleteHistory($id)
    {
        TravelHistory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Travel History Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('travel.history')->with($notification);
    }
}
