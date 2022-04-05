<div>
    @if(Session::has('success'))
    <div class="col-md-6 mx-auto">
        <p class="alert alert-danger">{{ Session::get('success') }}</p>
    </div>
    @endif
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Event Name</td>
                <td>Description</td>
                <td>Delete</td>

            </tr>
        </thead>
        <tbody>
            @forelse ($events as $event)
            <tr>
                <td><a href="{{route('artist.create',[$event->id])}}">{{$event->event_name ??""}}</a></td>
                <td>{{$event->description ?? ""}}</td>

                <td><a href="javascript:void(0)" wire:click="delete({{$event->id}})" class="btn btn-danger sm">X</a></td>
            </tr>

            @empty

            @endforelse

        </tbody>
        <tfoot>
            <tr>
                <td>Event Name</td>
                <td>Description</td>
                <td>Delete</td>


            </tr>
        </tfoot>
      </table>
</div>
