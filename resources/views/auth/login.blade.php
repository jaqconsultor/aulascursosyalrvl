@extends('layouts.app')

@section('content')

<body class="hold-transition login-page">
  <div id="app">
    <section class="section">

    <div class="row justify-content-center">

      <div class="d-flex flex-wrap align-items-stretch">
        <!-- <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white"> -->
        <div class="col-md-8">
          <div class="p-4 m-3">
            <img src="/images/TRAUMATOLOGIA_p.jpg" alt="logo" width="200" class="shadow-light  mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Traumatologia</span></h4>
            <p class="text-muted">MODIFICADO Before you get started, you must login or register if you don't already have an account.</p>


            <div class="card">
                <div class="card-header">@lang('dicc.login')</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang('dicc.Email_Address')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" value="jaqconsultor@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">@lang('dicc.Password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" value="12345678" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                @lang('dicc.Login')
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    @lang('dicc.Forgot_Your_Password')
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                @if (Route::has('register'))
                                <button type="button" class="btn btn-success">
                                    <a class="nav-link" href="{{ route('register') }}">@lang('dicc.registrarse')</a>
                                </button>
                            @endif            </div>





            <div class="text-center mt-5 text-small">
              Copyright &copy; DDRSistemas C.A. 
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
       <!-- <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="/images/login-bg.gif">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                <h5 class="font-weight-normal text-muted-transparent">Traumatologia</h5>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      </div>
    </section>
  </div>

  <!-- Page Specific JS File -->
</body>
</html>










@endsection
