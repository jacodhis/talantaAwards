<div class="page-info">
    <h1 class="h1-page-title"><a href="{{route('mainPage')}}" style="color: white">Talanta Award</a></h1>

    <h2 class="h2-page-desc ">
        Vote Favourite Artist
    </h2>
    {{-- <h2 class="h2-page-desc"><a href="" style="color: #ffff">select Category</a></h2> --}}
    <!-- BreadCrumb -->
    <div class="breadcrumb-container">
        <ol class="breadcrumbs">
            <li>
                <a href="{{route('vote')}}">Home</a>
            </li>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif --}}
                @endauth
            </div>
            @endif

            {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
            {{-- <li class="active" data-toggle="modal" data-target="#exampleModal"><a href="javascript:void(0)"> Login</a></li> --}}
        </ol>
    </div>
    <!-- BreadCrumb -->
</div>

  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </br>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>


          <button type="submit" class="btn btn-secondary">{{ __('Login') }}</button>
            @if (Route::has('password.request'))
            <a class="btn btn-primary" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif

        </div>
    </form>
      </div>
    </div>
  </div> --}}
