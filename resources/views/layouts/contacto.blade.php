@extends('layouts.app') @section('content')
<!-- BREADCRUMB AREA START -->
<div
  class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---"
>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__breadcrumb-inner text-center">
          <h1 class="ltn__page-title">Contacto</h1>
          <div class="ltn__breadcrumb-list">
            <ul>
              <li><a href="index.html">Inicio</a></li>
              <li>Contacto</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div
          class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow"
        >
          <div class="ltn__contact-address-icon">
            <i class="icon-location-pin"></i>
          </div>
          <h3>Ubicación</h3>
          <p>Lima,Perú</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div
          class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow"
        >
          <div class="ltn__contact-address-icon">
            <i class="icon-phone"></i>
          </div>
          <h3>Telefono</h3>
          <p>+51 941815133</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div
          class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow"
        >
          <div class="ltn__contact-address-icon">
            <i class="icon-envelope"></i>
          </div>
          <h3>Email</h3>
          <p>identify@gmail.com</p>
        </div>
      </div>
      {{--
      <div class="col-lg-3">
        <div
          class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow"
        >
          <div class="ltn__contact-address-icon">
            <i class="icon-speedometer"></i>
          </div>
          <h3>Opening Hours</h3>
          <p>
            Fri to Wed: 6:00 Am to 8:00 Pm
            <br />
            Thursday - Off
          </p>
        </div>
      </div>
      --}}
    </div>
  </div>
</div>
<!-- CONTACT ADDRESS AREA END -->

<!-- GOOGLE MAP AREA START -->
<div class="ltn_google-map-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="google-map">
          {{--
          <iframe
            src="https://goo.gl/maps/1PBs2bXixzB3zsXi6"
            width="100%"
            height="100%"
            frameborder="0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
          --}}
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52496.39547464915!2d-77.05572157097491!3d-12.056044400525183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses!2spe!4v1688605334206!5m2!1ses!2spe"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- GOOGLE MAP AREA END -->

<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mt-100 mb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__form-box contact-form-box box-shadow--- white-bg---">
          <h3 class="text-center mb-50">¿Alguna duda? Contactanos al email.</h3>
          <form id="contact-form" action="mail.php" method="post">
            <div class="row">
              <div class="col-md-5">
                <input type="text" name="name" placeholder="Nombre:" />
                <input type="email" name="email" placeholder="Email:" />
                <input type="text" name="phone" placeholder="Telefono:" />
                {{--
                <input type="text" name="subject" placeholder="Probl:" />
                --}}
              </div>
              <div class="col-md-7">
                <textarea name="message" placeholder="Mensaje"></textarea>
              </div>
              <div class="col-lg-12">
                <div class="btn-wrapper mt-0">
                  <button
                    class="btn theme-btn-1 btn-effect-1 text-uppercase"
                    type="submit"
                  >
                    Enviar mensaje
                  </button>
                </div>
                <p class="form-messege mb-0 mt-20"></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTACT MESSAGE AREA END -->

<!-- BRAND LOGO AREA START -->

<!-- BRAND LOGO AREA END -->
@endsection
