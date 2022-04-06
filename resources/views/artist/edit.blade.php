
@extends('layouts.backend.layout')
@section('title')
Edit An Artist
@endsection
{{--
@section('subTitle')
<div class="container col-md-8 mx-auto" >
    Add Artist To {{$event->event_name}}
</div>


@endsection --}}

@section('content')
 <div class="col-md-6 mx-auto" >
    <h3>Edit Artist in {{$event->event_name ?? ""}}</h3>
    <form method="post" action = "{{route('update.artist',[$artist->id])}}"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" value="{{$artist->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" value="{{$artist->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Gender</label><small>({{$artist->gender}})</small>
            <select name="gender" id="" class="form-control" >
                <option value="">select Gender</option>
                <option value="male">male</option>
                <option value="female">Female</option>
            </select>
          </div>

            <input type="hidden"  name="event_id" value="<?php echo $event->id ;?>" class="form-control" @disabled(true) >


          <div class="form-group py-4 ">
            <input type="file" class="form-control" name="image" id="image">
          </div>


          <div class="form-group py-4 ">
            <button type="submit" class="btn btn-primary" name=>Submit</button>
          </div>




      </form>
 </div>

@endsection
