<div>
    @if(Session::has('success'))
    <div class="col-md-6 mx-auto">
        <p class="alert alert-danger">{{ Session::get('success') }}</p>
    </div>
    @endif
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Code</td>
                <td>votes</td>
                <td>Event Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($artists as $artist)
            <tr>
                <td><a href="{{route('artist.show',[$artist->id])}}" class="" style="color:white">{{$artist->name ??""}}</a></td>
                <td>{{$artist->email ??""}}</td>
                <td>{{$artist->code ?? ""}}</td>
                <td>
                    @php
                     $votes =  \App\Models\payment::where('artist_code','=',$artist->code)->get();
                    @endphp
                   {{$votes->count()}}
                </td>
                <td>{{$artist->event->event_name  ?? "N/A"}}</td>
                <td>
                    <a href="javascript:void(0)" wire:click="delete({{$artist->id}})" class="btn btn-danger sm">X</a>
                    <a href="{{route('edit.artist',[$artist->id])}}" class="btn btn-danger sm">Edit</a>
                </td>
            </tr>

            @empty

            @endforelse

        </tbody>
        <tfoot>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Code</td>
                <td>votes</td>
                <td>Event Name</td>
                <td>Action</td>
            </tr>
        </tfoot>
      </table>






</div>
