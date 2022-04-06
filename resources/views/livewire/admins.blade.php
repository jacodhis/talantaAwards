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
                <td>Phone</td>
                <td>gender</td>
                <td>Events</td>

                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($admins as $admin)
            <tr>
                <td><a href="#" class="" style="color:white">{{$admin->name ??""}}</a></td>
                <td>{{$admin->email ??""}}</td>
                <td>{{$admin->phone ?? ""}}</td>
                <td>{{$admin->gender ?? ""}}</td>
                <td>
                    {{$admin->events->count() ?? "0"}}
                </td>
                <td>
                    <a href="javascript:void(0)" wire:click="delete({{$admin->id}})" class="btn btn-danger sm">X</a>
                    <a href="{{route('edit.admin',[$admin->id])}}" class="btn btn-danger sm">Edit</a>
                </td>
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
