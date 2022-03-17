@extends('layouts.backend')

@section('artists Page')
@section('content')
<div class="container">

<div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <table class="table">
            <tr>
                <td>name</td>
                <td>Email</td>
                <td>phone</td>
                <td>Code</td>
            </tr>
            @forelse ($allArtists as $artist)
            <tr>
                <td>{{$artist->name ?? ""}}</td>
                <td>{{$artist->email ??""}}</td>
                <td>{{$artist->phone ?? "NULL"}}</td>
                <td>{{$artist->code ?? ""}}</td>

            </tr>

            @empty
             0 records

            @endforelse
        </table>
    </div>
    <div class="col-lg-5">
        <a href="javascript:void(0)" wire:click="submit"> Add Employee</a></br>
        <div id="form">
            <form wire:submit.prevent="submit">
                @if(session()->has('success'))
                <span style="color: blue">{{session('success')}}</span></br>
                @elseif(session()->has('delete'))
                <span style="color:red">{{session('delete')}}</span></br>
                @endif

                {{-- <input type="hidden" wire:model="hiddenEmpId" value="{{$hiddenEmpId}}"></br> --}}

                Name:<br><input type="text" wire:model="name" class="form-control"></br>
                @error('name')
                <span style="color:red">{{$message}}</span>
                @enderror
                Email:<br><input type="email" wire:model="email" class="form-control"></br>
                @error('email')
                <span style="color:red">{{$message}}</span>
                @enderror
                </br>
                <button type="submit" class="form-control btn btn-primary">save</button>
            </form>
        </div>
    </div>
</div>



</div>


@endsection

