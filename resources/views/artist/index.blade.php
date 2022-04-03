
@extends('layouts.backend.layout')


@section('title')
Artists
@endsection

@section('subTitle')
    All Artists
@endsection



@section('content')
@livewireStyles
  @livewire('view-artists')
@livewireScripts

@endsection

