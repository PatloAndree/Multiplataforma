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
            <h1 class="ltn__page-title">Registro</h1>
            <div class="ltn__breadcrumb-list">
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li>Registrarse</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMB AREA END -->

  <!-- LOGIN AREA START (Register) -->
  <div class="ltn__login-area pb-90">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title-area text-center">
            <h1>
              Crear
              <br />
              mi cuenta
            </h1>
            <p>Llena el formulario para poder crear una cuenta en Identify.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="account-login-inner">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>

            @endif
            <form
              action="{{route('registrar')}}"
              method="POST"
              class="ltn__form-box contact-form-box"
            >
              @csrf
              <input type="text" name="name" placeholder="Primer Nombre*" />
              <input
                type="text"
                name="lastname"
                placeholder="Primero Apellido*"
              />
              <input type="text" name="email" placeholder="Correo*" />
              <input
                type="password"
                name="password"
                placeholder="Contraseña*"
              />
              <input
                type="password"
                name="confirmpassword"
                placeholder="Confirmar Contraseña*"
              />
              <label class="checkbox-inline">
                <input type="checkbox" value="" />
                De cuerdo para que Identify procese mis datos personales para
                enviar material de marketing personalizado de acuerdo con el
                formulario de consentimiento y la política de privacidad.
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" value="" />
                Al hacer clic en "crear cuenta", acepto la política de
                privacidad.
              </label>
              <div class="btn-wrapper">
                <button
                  class="theme-btn-1 btn reverse-color btn-block"
                  type="submit"
                >
                  CREAR CUENTA
                </button>
              </div>
            </form>
            <div class="by-agree text-center">
              {{--
              <p>By creating an account, you agree to our:</p>
              <p>
                <a href="#">
                  TERMS OF CONDITIONS &nbsp; &nbsp; | &nbsp; &nbsp; PRIVACY
                  POLICY
                </a>
              </p>
              --}}
              <div class="go-to-btn mt-50">
                <a href="login.html">¿ Ya tienes una cuenta ?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- LOGIN AREA END -->
</div>
@endsection
