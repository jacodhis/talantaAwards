@extends('layouts.vote.layout')

@section('title')
    artists voting platform
@endsection
@section('content')
    @livewireStyles
       @livewire('artists')
    @livewireScripts
@endsection
