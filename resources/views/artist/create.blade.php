<head>
    <link rel="stylesheet" href="{{asset('app/css/bootstrap.css')}}">
</head>

<center>
    <div class="col-md-6">
        <form metho="post" action = "{{route('artist.store')}}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">name address</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</center>
