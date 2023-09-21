@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('dicc.Register')</div>
                <center>
                <img src="/images/TRAUMATOLOGIA_p.jpg" alt="logo" width="200" class="shadow-light  mb-5 mt-2">
                </center>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Registrarse como ?</label>

                            <div class="col-md-6">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input id="in_medico" name="in_medico" type="radio" name="gender" value="1" autocomplete="off"> Soy Medico
                            </label>
                            <label class="btn btn-default">
                                <input id="in_medico" name="in_medico" type="radio" name="gender" value="2" autocomplete="off"> Soy Paciente
                            </label>
                            </div>

                                @error('in_medico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang('dicc.Name') <img src="/bootstrap-icons/icons/person.svg"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang('dicc.Email_Address') <img src="/bootstrap-icons/icons/mailbox.svg" /></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">@lang('dicc.Confirm_Password') <img src="/bootstrap-icons/icons/key.svg" /></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <button type="button" class="btn btn-default">
                                    <a href="/login">Cancelar</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <!--   <div class="text-center mt-5 text-small">
              Copyright &copy; DDRSistemas C.A. 
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
-->
</div>
@endsection
