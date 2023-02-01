<?php

namespace App\Http\Controllers;

use App\Models\invoiceAttachment;
use App\Models\invoice_details;
use App\Models\invoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function show(invoice_details $invoice_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $invoices = invoices::where('id',$id)->first();
        $details  = invoice_Details::where('id_Invoice',$id)->get();
        $attachments  = invoiceAttachment::where('invoice_id',$id)->get();
        return view('invoices.details_invoices',compact('invoices','details','attachments'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice_details $invoice_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice_details $invoice_details)
    {
        //
    }
    public function open_file($invoice_number,$file_name)
    {
        $files = Storage::url(storage_path()."\Attachments\\".$invoice_number."\\".$file_name);


        return file($files);
        return response()->file($files);
    }
}
