@extends('layouts.app-master')

@section('content')
    
    <h1 class="mb-3">ABZ fleet company</h1>

    <div class="bg-light p-4 rounded">
        <h2>Payments</h2>
                
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Transaction Code</th>
             <th>Amount Paid</th>
             <th>Status</th>
             <th>balance</th>
             <th>Fleet Number</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($payments as $key => $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->transaction_code }}</td>
                <td>{{ $payment->amount_paid }}</td>
                <td>{{ $payment->status }}</td>
                <td>{{ $payment->balance }}</td>
                <td>{{ $payment->vehicle->fleet_number }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('payments.show', $payment->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('payments.edit', $payment->id) }}">Issue Receipt</a>
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $payments->links() !!}
        </div>

    </div>
@endsection
