
@extends('layouts.backend.layout')


@section('title')
admins
@endsection

@section('subTitle')
    All Admins

     <a href="{{route('create.admin')}}" style="color="white>add an Admin</a>


@endsection



@section('content')
@livewireStyles
  @livewire('admins')
@livewireScripts
@endsection

