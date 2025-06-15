<?php

namespace App\Http\Controllers;

use App\Models\PrintedDoc;
use App\Models\Tracking;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function generateInvoice(Request $request)
    {
        $trackings = Tracking::latest()->get();
        $invoices = PrintedDoc::latest()->get();
        return view('admin.invoice.add_invoice', compact('trackings', 'invoices'));
    }

    public function addInvoice(Request $request)
    {
        $request->validate([
            'tracking_id' => 'required',
            'bank_name' => 'required',
            'acct_no' => 'required',
            'frieght_amount' => 'required',
            'warehouse_fee' => 'required',
            'custom_fee' => 'required',
        ]);

        $trackingId = $request->tracking_id;
        $invoice = PrintedDoc::where('tracking_id', $trackingId)->first();

        if ($invoice) {
            $notification = array(
                'message' => 'Inovice already exist',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);
        }

        PrintedDoc::insert([
            'tracking_id' => $trackingId,
            'bank_name' => $request->bank_name,
            'acct_no' => $request->acct_no,
            'frieght_amount' => $request->frieght_amount,
            'warehouse_fee' => $request->warehouse_fee,
            'custom_fee' => $request->custom_fee,
            'created_at' => Carbon::now(),
        ]);

        $success = array(
            'message' => 'Inovice created',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($success);
    }

    public function editInvoice($id)
    {
        $trackings = Tracking::latest()->get();
        $invoice = PrintedDoc::findOrFail($id);
        return view('admin.invoice.edit_invoice', compact('invoice', 'trackings'));
    }

    public function updateInvoice(Request $request)
    {
        $request->validate([
            'bank_name' => 'required',
            'acct_no' => 'required',
            'frieght_amount' => 'required',
            'warehouse_fee' => 'required',
            'custom_fee' => 'required',
        ]);

        $id = $request->id;

        PrintedDoc::findOrFail($id)->update([
            'bank_name' => $request->bank_name,
            'acct_no' => $request->acct_no,
            'frieght_amount' => $request->frieght_amount,
            'warehouse_fee' => $request->warehouse_fee,
            'custom_fee' => $request->custom_fee,
        ]);

        $notification = array(
            'message' => 'Invoice updated',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteInvoice($id)
    {
        PrintedDoc::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function downloadPDF()
    {
        $shipment = Tracking::all();
        $data = [
            'title' => 'Tracking Information',
            'date' => date('d/m/Y'),
            'shipment' => $shipment
        ];

        $pdf = PDF::loadView('invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
