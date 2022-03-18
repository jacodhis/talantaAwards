<div class="col-md-3 mx-auto">
    @if(session('success'))
    <div class="alert alert-success" >
        {{session('success')}}
    </div>

    @endif

        @if(session('error'))
        <div class="alert alert-danger">
        {{session('error')}}
        </div>

    @endif
</div>
