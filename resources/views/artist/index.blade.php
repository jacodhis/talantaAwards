
@extends('layouts.backend.layout')


@section('title')
Artists
@endsection

@section('subTitle')
    All Artists
@endsection



@section('content')


{{-- <a href="{{route('artist.create')}}" >Add artist</a> --}}
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Code</td>
            <td>votes</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($artists as $artist)
        <tr>
            <td><a href="{{route('artist.show',[$artist->id])}}" class="" style="color:white">{{$artist->name ??""}}</a></td>
            <td>{{$artist->email ??""}}</td>
            <td>{{$artist->code ?? ""}}</td>
            <td>
                @php
                 $votes =  \App\Models\payment::where('artist_code','=',$artist->code)->get();
                @endphp
               {{$votes->count()}}
            </td>
            <td><a href="" class="btn btn-danger sm">X</a></td>
        </tr>

        @empty

        @endforelse

    </tbody>
    <tfoot>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Code</td>
            <td>votes</td>
            <td>action</td>
        </tr>
    </tfoot>
  </table>

</div>

@endsection

