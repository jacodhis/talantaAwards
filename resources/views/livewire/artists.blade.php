<div class="card">
    <div class="card-header d-flex justify-content-between ">
      <h3 class="card-title">Artists</h3>
      <h3 class="card-title">
           <a  href="javascript:void(0)" data-bs-toggle = "modal" data-bs-target="#myModal" style="color: #ffff">Add artist</a>
        </h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Artist Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Code</th>

        </tr>
        </thead>
        <tbody>

        <tr>
          <td>Other browsers</td>
          <td>All others</td>
          <td>-</td>
          <td>-</td>

        </tr>

        </tbody>
        <tfoot>

            @forelse ($artists as $artist)
            <tr>
                <td><a href="{{route('artist.show',[$artist->id])}}">{{$artist->name ??""}}</a></td>
                <td>{{$artist->email ??""}}</td>
                <th>0790257335</th>
                <td>{{$artist->code ?? ""}}</td>

              </tr>

            @empty
            No Artists

            @endforelse
        </tfoot>
      </table>
      {{-- <input type="text" name="" id="" wire:model="name">{{$name}} --}}

    </div>
    <!-- /.card-body -->
  </div>



  <div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #ffff">Heading</h5>
                <button type="button" class="btn-btn-primary" data-bs-dismiss="modal" >X</button>
            </div>

            <form wire:submit.prevent="submit">

            <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">name address</label>
                      <input type="text" name="" id="" wire:model="name">{{$name}}
                      <input type="text" wire:model="name" class="form-control"  placeholder="Enter Name" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input type="text" wire:model="email" class="form-control" id="email"placeholder="Enter email" >
                    </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="#" class="btn btn-danger">Cancel</button>

            </div>
        </form>

        </div>
    </div>













    {{-- <div>
  <div class="container">
    <a href="javascript:void(0)" data-bs-toggle = "modal" data-bs-target="#myModal"> Add Artist</a>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: white">Heading</h5>
                    <button type="button" class="btn-btn-primary" data-bs-dismiss="modal" >X</button>
                </div>

                <form wire:submit.prevent="submit">

                <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">name address</label>
                          <input type="text"  class="form-control"  placeholder="Enter Name" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="text"  class="form-control" id="email"placeholder="Enter email" >
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="#" class="btn btn-danger">Cancel</button>

                </div>
            </form>

            </div>
        </div>
    </div>
  </div> --}}
  {{-- <style>
      .modal-header{
          background: #F7941E;
      }
      .required::after{
          content: "*";
      }
  </style> --}}

{{-- <a href="{{route('artist.create')}}">add artist</a> --}}
{{-- <table class="table table-hover">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Code</td>
        <td>remove</td>
    </tr>
    @forelse ($artists as $artist)
    <tr>
        <td><a href="{{route('artist.show',[$artist->id])}}">{{$artist->name ??""}}</a></td>
        <td>{{$artist->email ??""}}</td>
        <td>{{$artist->code ?? ""}}</td>
        <td><a href="" class="btn btn-danger sm">X</a></td>
    </tr>

    @empty

    @endforelse
</table>





</div> --}}
