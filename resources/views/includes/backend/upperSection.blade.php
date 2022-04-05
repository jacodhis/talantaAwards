
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">All Events</span>
          <span class="info-box-number">
           @if (auth()->user()->roleName() == "superAdmin")
             @php
                $events =  \App\Models\event::get() ;
             @endphp
             {{$events->count() ??""}}
           @else
           {{auth()->user()->events->count()??""}}
           @endif
            {{-- <small>%</small> --}}
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

        <div class="info-box-content">
            @if (auth()->user()->roleName() == "superAdmin")
              <span class="info-box-text"><a href="{{route('admins')}}">All Admins</a> </span>
            @else
            <span class="info-box-text">All Artists</span>
            @endif
          <span class="info-box-number">
            @if (auth()->user()->roleName() == "superAdmin")
            @php
             $admins =  \App\Models\User::get() ;
            @endphp
            {{$admins->count() ??""}}
            @else
            {{auth()->user()->artists->count()??""}}
            @endif
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

        <div class="info-box-content">
            @if (auth()->user()->roleName() == "superAdmin")
              <span class="info-box-text">All Artists</span>
              <span class="info-box-number">
                @php
                $artists =  \App\Models\artist::get() ;
               @endphp
               {{$artists->count() ??""}}
              </span>
            @else
            <span class="info-box-text">Any Other</span>
              <span class="info-box-number">750</span>

            @endif
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">New Members</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
