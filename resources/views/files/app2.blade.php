
<div class="phone" id="mobileappagileits">
    <div class="container">

        <div class="row">

       @foreach ($artists as $artist )
       <div class="col-md-3">
           <p> <img src="{{asset('/storage/artistImages/'.$artist->image)}}"
            alt="Image" class="img-fluid"></a></p>
           <p>CODE :{{$artist->code}}</p>
          <p>ARTIST NAME:{{$artist->name}}</p>
          <p><a href="btn btn-primary">Vote</a></p>
       </div>
       @endforeach


        </div>
    </div>
</div>
