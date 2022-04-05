
@extends('layouts.backend.layout')


@section('title')
Events
@endsection

@section('subTitle')
<a href="{{route('event.create')}}" > Add Event </a>
@endsection



@section('content')
@livewireStyles
@livewire('events')
@livewireScripts
@endsection

