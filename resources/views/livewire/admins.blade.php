<div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Events</td>
                {{-- <td>action</td> --}}
            </tr>
        </thead>
        <tbody>
            @forelse ($admins as $admin)
            <tr>
                <td><a href="#" class="" style="color:white">{{$admin->name ??""}}</a></td>
                <td>{{$admin->email ??""}}</td>
                <td>{{$admin->phone ?? ""}}</td>
                <td>
                    {{$admin->events->count() ?? "0"}}
                </td>
                <td><a href="" class="btn btn-danger sm">X</a></td>
            </tr>

            @empty

            @endforelse

        </tbody>
        <tfoot>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Events</td>
                {{-- <td>action</td> --}}
            </tr>
        </tfoot>
      </table>
</div>
