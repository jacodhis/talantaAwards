<div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    @forelse ($events as $event)
                    <div class="col-md-3">
                       <a href="javascript:void(0)" wire:click="event({{$event->id}})"> {{$event->event_name}}</a>
                    </div>
                    @empty

                    @endforelse

                </div>
            </div>

            <div class="col-md-5">
                <h3>{{$eventName->event_name ?? ""}}</h3>
                <form method="post" action = "{{route('artist.store')}}"  enctype="multipart/form-data">
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
                        <label for="exampleInputEmail1">Gender</label>
                        <select name="gender" id="" class="form-control">
                            <option value="">select Gender</option>
                            <option value="male">male</option>
                            <option value="female">Female</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <input type="text" value="{{$eventName->id??""}}" name="event_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required disabled>

                      </div>

                      <div class="form-group py-4 ">
                        <input type="file" class="form-control" name="image" id="image">
                      </div>


                      <div class="form-group py-4 ">
                        <button type="submit" class="btn btn-primary" name=>Submit</button>
                      </div>




                  </form>

            </div>
        </div>
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
</div>
