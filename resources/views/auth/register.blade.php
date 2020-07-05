@extends('inc.app-home')
@section('contenido')

<div class="login-content">
  <div class="login-background"> 
    <div class="container-fluid py-4">
      <div class="row mt-5">
        <div class="col-md-6 text-center mb-2">
          <h3 class="login-text">BIENVENIDOS A </h3>
          <h1 class="login-text display-3">ACADEMVIT</h1>
          <img src="{{ asset('img/logo.png') }}" class="w-25">
          @if( session('success') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
        </div>
        <div class="col-md-6">
          <div class="card card-login  form-login text-center">
            <div class="card-header">
              <h3>{{ __('Registrase') }}</h3>
            </div>
            <div class="card-body pt-5">
              <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>
 <div class="section section-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="calltoaction-wrapper">
                            <h3><span class="h4" style="color:#009688; text-transform:uppercase;">AcademVIT!</span> es un entorno digital que posibilita el desarrollo en el proceso de aprendizaje.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection