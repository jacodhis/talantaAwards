@extends('layouts.backend')

@section('content')
<a href="{{route('artist.create')}}">add artist</a>
<table class="table table-hover">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Code</td>
        <td>remove</td>
    </tr>
    @forelse ($artists as $artist)
    <tr>
        <td><a href="{{route('artist.show',[$artist->id])}}">{{$artist->name ??""}}</a></td>
        <td>{{$artist->email ??""}}</td>
        <td>{{$artist->code ?? ""}}</td>
        <td><a href="" class="btn btn-danger sm">X</a></td>
    </tr>

    @empty

    @endforelse
</table>
@endsection
