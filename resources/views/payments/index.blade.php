@extends('layouts.backend')

@section('content')
<div class="container">
    <table class="table">
        <tr>
            <td>Phone</td>
            <td>Amount</td>
            <td>mpesa_receit_number</td>
            <td>transaction_date</td>
            <td>Artist Code</td>
        </tr>
        @forelse ($payments as $payment)
        <tr>
            <td>{{$payment->phone}}</td>
            <td>{{$payment->amount}}</td>
            <td>{{$payment->mpesa_receipt_number}}</td>
            <td>{{$payment->transaction_date}}</td>

        </tr>

        @empty
         0 records

        @endforelse
    </table>
</div>

@endsection
