
@extends('layouts.backend.layout')
@section('title')
Add An Admin
@endsection
{{--
@section('subTitle')
<div class="container col-md-8 mx-auto" >
    Add Artist To {{$event->event_name}}
</div>


@endsection --}}

@section('content')
 <div class="col-md-6 mx-auto" >
    <h3>Create Admin</h3>
    <form method="post" action = "{{route('admin.store')}}"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" required>

          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            <select name="gender" id="" class="form-control">
                <option value="">select Gender</option>
                <option value="male">male</option>
                <option value="female">Female</option>
            </select>
          </div>



          {{-- <div class="form-group py-4 ">
            <input type="file" class="form-control" name="image" id="image">
          </div> --}}


          <div class="form-group py-4 ">
            <button type="submit" class="btn btn-primary" name=>Submit</button>
          </div>




      </form>
 </div>

@endsection
