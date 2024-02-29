@extends('layouts.app') @section('content')
<!-- BREADCRUMB AREA START -->
<div
  class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---"
>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__breadcrumb-inner text-center">
          <h1 class="ltn__page-title">Acerca de identify</h1>
          <div class="ltn__breadcrumb-list">
            <ul>
              <li><a href="index.html">Inicio</a></li>
              <li>Acerca de</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div
          class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6"
        >
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img
                src="{{asset('asset/img/icons/svg/8-trolley.svg')}}"
                alt="#"
              />
            </div>
            <div class="ltn__feature-info">
              <h4>Free shipping</h4>
              <p>On all orders over $49.00</p>
            </div>
          </div>
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img src="{{asset('asset/img/icons/svg/9-money.svg')}}" alt="#" />
            </div>
            <div class="ltn__feature-info">
              <h4>15 days returns</h4>
              <p>Moneyback guarantee</p>
            </div>
          </div>
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img
                src="{{asset('asset/img/icons/svg/10-credit-card.svg')}}"
                alt="#"
              />
            </div>
            <div class="ltn__feature-info">
              <h4>Secure checkout</h4>
              <p>Protected by Paypal</p>
            </div>
          </div>
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img
                src="{{asset('asset/img/icons/svg/11-gift-card.svg')}}"
                alt="#"
              />
            </div>
            <div class="ltn__feature-info">
              <h4>Offer & gift here</h4>
              <p>On all orders over</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FEATURE AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-90 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 align-self-center">
        <div class="about-us-info-wrap">
          <h2 class="mb-30 font-weight-6">Fiama - Powerful Theme for Shop</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nost exercit ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
          <p>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia mollit anim id est laborum. Sed ut perspiciatis unde omnis
            iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
            quasi architecto beatae vitae dicta sunt explicabo.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ABOUT US AREA END -->

<!-- VIDEO AREA START -->
<div class="ltn__video-area pb-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div
          class="ltn__video-bg-img ltn__video-popup-height-5 section-bg-3--- bg-image pt-170 pb-150"
          data-bs-bg="{{asset('asset/img/bg/1.jpg')}}"
          id="ltnr_video"
        >
          <a
            class="ltn__video-icon-1"
            href="https://www.youtube.com/watch?v=MSgirtzUMSY"
            data-rel="lightcase:myCollection"
          >
            <i class="icon-control-play"></i>
          </a>
          <br />
          <div class="ltn__video-info d-none">
            <h1 class="white-color">APPS AWESOME VIDEO</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- VIDEO AREA END -->

@endsection
