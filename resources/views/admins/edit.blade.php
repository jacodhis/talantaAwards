
@extends('layouts.backend.layout')
@section('title')
admin update
@endsection

@section('subTitle')
<div class="container col-md-8 mx-auto" >
    Update {{$user->name}} Information
</div>


@endsection

@section('content')
<form  method="POST" action="{{route('update.admin',[$user->id])}}">
    {{-- @method('PUT') --}}
    @csrf

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
          </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
    </div>
    <div class="col-md-4">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" required>

      </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>{{$user->gender}}
            <select name="gender" id="" class="form-control" >
                <option value="">select Gender</option>
                <option value="male">male</option>
                <option value="female">Female</option>
            </select>
          </div>
    </div>
<div class="col-md-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary" >Submit</button>
      </div>
</div>

</div>
</form>
@endsection
