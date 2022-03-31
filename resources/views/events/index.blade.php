
@extends('layouts.backend.layout')


@section('title')
Events
@endsection

@section('subTitle')
Click Event to add participants
@endsection



@section('content')
<div class=" card container">
   <div class="row">
        @forelse ($events as $event)
        <div class="col-md-4">
          <a href="{{route('artist.create',[$event->id])}}"  style="color: white">  {{$event->event_name}}</a>
        </div>
        @empty

        @endforelse
   </div>
</div>


@endsection

