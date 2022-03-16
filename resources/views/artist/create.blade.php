<head>
    <link rel="stylesheet" href="{{asset('app/css/bootstrap.css')}}">
</head>

<center>
    <div class="col-md-6">
        <form metho="post" action = "{{route('artist.store')}}">
            @csrf
            @if(session()->has('success'))
               <div class="btn btn-primary">
                   {{session('success')}}
               </div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
           @endif
            <div class="form-group">
              <label for="exampleInputEmail1">name address</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</center>
