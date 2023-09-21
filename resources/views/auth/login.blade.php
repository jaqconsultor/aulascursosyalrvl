@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header">@lang('dicc.login')</div>
                <center>
                <img src="/images/TRAUMATOLOGIA_p.jpg" alt="logo" width="200" class="shadow-light  mb-5 mt-2">
                </center>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang('dicc.Email_Address') <img src="/bootstrap-icons/icons/mailbox.svg" /></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Ingrese Su Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">@lang('dicc.Password') <img src="/bootstrap-icons/icons/key.svg" /></label>

                            <div class="col-md-6">
                            
                                <input id="password" type="password" placeholder="Ingrese Su Contrasenia" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                    <br>


                    <div class="card-footer">
                    @if (Route::has('register'))
                                <button type="button" class="btn btn-success">
                                    <a class="nav-link" href="{{ route('register') }}">@lang('dicc.registrarse')</a>
                                </button>
                            @endif            
                            </div>          



                </div>
            </div>
        </div>
    </div>

 </div>
                </div>















@endsection
