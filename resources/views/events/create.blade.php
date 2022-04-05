
@extends('layouts.backend.layout')
@section('title')
Add An Event
@endsection
{{--
@section('subTitle')
<div class="container col-md-8 mx-auto" >
    Add Artist To {{$event->event_name}}
</div>


@endsection --}}

@section('content')
 <div class="col-md-6 mx-auto" >
    <h3>Create An Event</h3>
    <form method="post" action = "{{route('event.store')}}"  >
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Event Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" name="desription"></textarea>
            {{-- <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required> --}}

          </div>




          <div class="form-group py-4 ">
            <button type="submit" class="btn btn-primary" >Submit</button>
          </div>




      </form>
 </div>

@endsection
