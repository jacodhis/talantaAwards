
@extends('layouts.backend.layout')
@section('title')
Add An Artist
@endsection

@section('subTitle')
    Add Artist Here
@endsection

@section('content')

<div class="col-md-6 mx-auto">
    <form method="post" action = "{{route('artist.store')}}"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name ASddress</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            <select name="gender" id="" class="form-control">
                <option value="">select Gender</option>
                <option value="male">male</option>
                <option value="female">Female</option>
            </select>
          </div>
          <div class="form-group py-4 ">
            <input type="file" class="form-control" name="image" id="image">
          </div>

          {{-- <div id="output" style="background-color: red">
          </div> --}}
          <div class="form-group py-4 ">
            <button type="submit" class="btn btn-primary" name=>Submit</button>
          </div>




      </form>

</div>

<script>
    const inpFile = document.getElementById('image');
    const output = document.getElementById('output');
    inpFile.addEventListener('change',()=>{
        const file = event.target.files;
        if(file){
            console.log(file.length);
            output.src  = URL.createObjectURL(file[0]);
        }else{
            console.log('no file choosen');
        }
            });
</script>
@endsection
