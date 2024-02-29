@extends('layouts.app') @section('content')
<div class="body-wrapper">
  <!-- BREADCRUMB AREA START -->
  <div
    class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ltn__breadcrumb-inner text-center">
            <h1 class="ltn__page-title">Login</h1>
            <div class="ltn__breadcrumb-list">
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li>Login</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMB AREA END -->

  <!-- LOGIN AREA START -->
  <div class="ltn__login-area pb-85">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title-area text-center">
            <h1>
              Iniciar Sesión
              <br />
            </h1>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="account-login-inner">
            @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
              {{Session::get('error')}}
            </div>
            @endif
            <form
              action="#"
              action="{{ route('logeado')}}"
              method="POST"
              class="ltn__form-box contact-form-box"
            >
              @csrf
              <input type="text" name="email" placeholder="Email*" />
              <input type="password" name="password" placeholder="Password*" />
              <div class="btn-wrapper mt-0">
                <button class="theme-btn-1 btn btn-block" type="submit">
                  ENTRAR
                </button>
              </div>
              <div class="go-to-btn mt-20">
                <a href="#"><small>olvide mi contraseña</small></a>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="account-create text-center pt-50">
            <h4>¿No tienes una cuenta?</h4>
            <p>
              Añade artículos a tu lista de deseos obtén recomendaciones
              personalizadas
              <br />
              echa un vistazo más rápidamente
            </p>
            <div class="btn-wrapper">
              <a href="register.html" class="theme-btn-1 btn black-btn">
                CREAR CUENTA
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- LOGIN AREA END -->

  <!-- BRAND LOGO AREA START -->
  <div
    class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-35 pb-35 plr--5"
  >
    <div class="container-fluid">
      <div class="row ltn__brand-logo-active">
        <div class="col-lg-12">
          <div class="ltn__brand-logo-item">
            <img
              src="{{asset('asset/img/brand-logo/carsa.png')}}"
              alt="Brand Logo"
            />
          </div>
        </div>
        <div class="col-lg-12">
          <div class="ltn__brand-logo-item">
            <img
              src="{{asset('asset/img/brand-logo/colbox.jpg')}}"
              alt="Brand Logo"
            />
          </div>
        </div>
        <div class="col-lg-12">
          <div class="ltn__brand-logo-item">
            <img
              src="{{asset('asset/img/brand-logo/curacao.png')}}"
              alt="Brand Logo"
            />
          </div>
        </div>
        <div class="col-lg-12">
          <div class="ltn__brand-logo-item">
            <img
              src="{{asset('asset/img/brand-logo/efe.png')}}"
              alt="Brand Logo"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BRAND LOGO AREA END -->
</div>
@endsection
