@extends('layouts.backend.layout')

@section('subTitle')
   All  Payments
@endsection
@section('content')
{{-- <a href="{{route('artist.create')}}" >Pay</a> --}}
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>Phone</td>
            <td>Amount</td>
            <td>mpesa_receit_number</td>
            <td>transaction_date</td>
            <td>Artist Code</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($payments as $payment)

        <tr>
            <td>{{$payment->phone}}</td>
            <td>{{$payment->amount}}</td>
            <td>{{$payment->mpesa_receipt_number}}</td>
            <td>{{$payment->transaction_date}}</td>
            <td>{{$payment->artist_code}}</td>

        </tr>

        @empty
         0 records

        @endforelse

    </tbody>
    <tfoot>
        <tr>
            <td>Phone</td>
            <td>Amount</td>
            <td>mpesa_receit_number</td>
            <td>transaction_date</td>
            <td>Artist Code</td>
        </tr>
    </tfoot>
  </table>

</div>

@endsection
