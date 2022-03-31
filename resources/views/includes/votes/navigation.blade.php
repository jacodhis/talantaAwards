<div class="page-info">
    <h1 class="h1-page-title"><a href="{{route('mainPage')}}" style="color: white">Talanta Award</a></h1>

    <h2 class="h2-page-desc ">
        Vote Favouirite Artist
    </h2>
    {{-- <h2 class="h2-page-desc"><a href="" style="color: #ffff">select Category</a></h2> --}}
    <!-- BreadCrumb -->
    <div class="breadcrumb-container">
        <ol class="breadcrumbs">
            <li>
                <a href="{{route('vote')}}">Home</a>
            </li>
            <li class="active" data-toggle="modal" data-target="#exampleModal"><a href="javascript:void(0)"> Login</a></li>
        </ol>
    </div>
    <!-- BreadCrumb -->
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
              <label for="">Email</label>
              <input type="text" class="form-control">

              <label for="">Password</label>
              <input type="password" class="form-control">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
          {{-- <p>dont have an account register<a href="" data-toggle="modal" data-target="#exampleModal"> Here</a></p> --}}
        </div>
      </div>
    </div>
  </div>
