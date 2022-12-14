<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Driver;
use App\Models\Vehicle;

class PaymentController extends Controller
{
    //
    public function index()
    {
        $payments = Payment::latest()->paginate(10);
        $vehicle = Vehicle::all();

        return view('payments.index', compact('payments','vehicle'));
    }
    public function show(Payment $payment)
    {
        //dd($payment);
        return view('payments.subscriptions', [
            'payment' => $payment
        ]);
    }
    public function create()
    {
        return view('payments.create', ['vehicles' => Driver::get(['id','name'])]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        Vehicle::create(array_merge($request->only('name', 'fleet_number', 'driver_id', 'packing_charge', [
            'created_by' => auth()->id()])));

        return redirect()->route('vehicles.index')
            ->withSuccess(__('Vehicle created successfully.'));
    }
}
