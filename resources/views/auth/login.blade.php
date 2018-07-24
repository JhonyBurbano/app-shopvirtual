@extends('layouts.app')

@section('body-class', 'signup-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" filter-color="purple" style="background-image: url('{{ asset('img/bg7.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="card card-signup">
                  <h2 class="card-title text-center">INICIO DE SESION</h2>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-12 mr-auto">
                              <div class="social text-center">
                                  <h4> Ingresar Datos </h4>
                              </div>
                              <form class="form" method="POST" action="{{ route('login') }}">
                                  @csrf
                                  <div class="form-group">
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text">
                                                  <i class="material-icons">mail</i>
                                              </span>
                                          </div>
                                          <input id="email" type="email" placeholder="Email..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                          @if ($errors->has('email'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="material-icons">lock_outline</i>
                                            </span>
                                          </div>
                                          <input id="password" type="password" placeholder="Password..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                          @if ($errors->has('password'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="form-check-sign">
                                              <span class="check"></span>
                                            </span>
                                            Recordar Sesión
                                      </label>
                                  </div>
                                  <div class="text-center">
                                      <button type="submit" class="btn btn-primary btn-round">
                                          {{ __('Ingresar') }}
                                      </button>

                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                          {{ __('Recuperar Password?') }}
                                      </a>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
    
</div>

@endsection