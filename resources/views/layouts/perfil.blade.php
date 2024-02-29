@extends('layouts.app') @section('content')
<!-- BREADCRUMB AREA START -->
<div
  class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---"
>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__breadcrumb-inner text-center">
          <h1 class="ltn__page-title">Mi cuenta</h1>
          <div class="ltn__breadcrumb-list">
            <ul>
              <li><a href="index.html">Inicio</a></li>
              <li>Mi cuenta</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- PRODUCT TAB AREA START -->
        <div class="ltn__product-tab-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="ltn__tab-menu-list mb-50">
                  <div class="nav">
                    <a
                      class="active show"
                      data-bs-toggle="tab"
                      href="#liton_tab_1_1"
                    >
                      Inicio
                      <i class="fas fa-home"></i>
                    </a>
                    {{--
                    <a data-bs-toggle="tab" href="#liton_tab_1_2">
                      Orders
                      <i class="fas fa-file-alt"></i>
                    </a>
                    --}}
                    <a data-bs-toggle="tab" href="#liton_tab_1_3">
                      Favoritos
                      <i class="fas fa-arrow-down"></i>
                    </a>
                    <a data-bs-toggle="tab" href="#liton_tab_1_4">
                      Dirección
                      <i class="fas fa-map-marker-alt"></i>
                    </a>
                    <a data-bs-toggle="tab" href="#liton_tab_1_5">
                      Editar cuenta
                      <i class="fas fa-user"></i>
                    </a>

                    <form action="{{route('salida')}}" method="POST">
                      @csrf @method('DELETE')
                      <div class="btn-wrapper mt-0">
                        <button
                          class="theme-btn-1 btn btn-block w-100"
                          style="background-color: #f45050"
                          type="submit"
                        >
                          SALIR
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="liton_tab_1_1">
                    <div class="ltn__myaccount-tab-content-inner">
                      <p>
                        Hello
                        <strong>UserName</strong>
                        (not
                        <strong>UserName</strong>
                        ?
                        <small><a href="login-register.html">Log out</a></small>
                        )
                      </p>
                      <p>
                        From your account dashboard you can view your
                        <span>recent orders</span>
                        , manage your
                        <span>shipping and billing addresses</span>
                        , and
                        <span>edit your password and account details</span>
                        .
                      </p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="liton_tab_1_2">
                    <div class="ltn__myaccount-tab-content-inner">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Order</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Total</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Jun 22, 2019</td>
                              <td>Pending</td>
                              <td>$3000</td>
                              <td><a href="cart.html">View</a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Nov 22, 2019</td>
                              <td>Approved</td>
                              <td>$200</td>
                              <td><a href="cart.html">View</a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Jan 12, 2020</td>
                              <td>On Hold</td>
                              <td>$990</td>
                              <td><a href="cart.html">View</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="liton_tab_1_3">
                    {{--
                    <div class="ltn__myaccount-tab-content-inner">
                      --}}
                      <div class="liton__wishlist-area mb-85">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="shoping-cart-inner">
                                <div
                                  class="shoping-cart-table table-responsive"
                                >
                                  <table class="table">
                                    <thead>
                                      <th class="cart-product-remove">X</th>
                                      <th class="cart-product-image">Image</th>
                                      <th class="cart-product-info">Title</th>
                                      <th class="cart-product-price">Price</th>
                                      {{--
                                      <th class="cart-product-quantity">
                                        Quantity
                                      </th>
                                      --}}
                                      <th class="cart-product-subtotal">
                                        Accion
                                      </th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                          <a href="product-details.html">
                                            <img
                                              src="{{asset('asset/img/product/celulares/xiomi.png')}}"
                                              alt="#"
                                            />
                                          </a>
                                        </td>
                                        <td class="cart-product-info">
                                          <h5>
                                            <a href="product-details.html">
                                              Brake Conversion
                                            </a>
                                          </h5>
                                        </td>
                                        <td class="cart-product-price">
                                          $85.00
                                        </td>
                                        <td class="cart-product-add-cart">
                                          <a
                                            class="submit-button-1"
                                            href="#"
                                            title="Add to Cart"
                                            data-bs-toggle="modal"
                                            data-bs-target="#add_to_cart_modal"
                                          >
                                            Quitar
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                          <a href="product-details.html">
                                            <img
                                              src="{{asset('asset/img/product/celulares/xiomi.png')}}"
                                              alt="#"
                                            />
                                          </a>
                                        </td>
                                        <td class="cart-product-info">
                                          <h5>
                                            <a href="product-details.html">
                                              Shock Mount
                                            </a>
                                          </h5>
                                        </td>
                                        <td class="cart-product-price">
                                          $89.00
                                        </td>
                                        <td class="cart-product-add-cart">
                                          <a
                                            class="submit-button-1"
                                            href="#"
                                            title="Quitar"
                                            data-bs-toggle="modal"
                                            data-bs-target="#add_to_cart_modal"
                                          >
                                            Quitar
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                          <a href="product-details.html">
                                            <img
                                              src="{{asset('asset/img/product/celulares/xiomi.png')}}"
                                              alt="#"
                                            />
                                          </a>
                                        </td>
                                        <td class="cart-product-info">
                                          <h5>
                                            <a href="product-details.html">
                                              Tail Light Lens
                                            </a>
                                          </h5>
                                        </td>
                                        <td class="cart-product-price">
                                          $149.00
                                        </td>
                                        <td class="cart-product-add-cart">
                                          <a
                                            class="submit-button-1"
                                            href="#"
                                            title="Quitar"
                                            data-bs-toggle="modal"
                                            data-bs-target="#add_to_cart_modal"
                                          >
                                            Quitar
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{--
                    </div>
                    --}}
                  </div>
                  <div class="tab-pane fade" id="liton_tab_1_4">
                    <div class="ltn__myaccount-tab-content-inner">
                      <p>
                        The following addresses will be used on the checkout
                        page by default.
                      </p>
                      <div class="row">
                        <div class="col-md-6 col-12 learts-mb-30">
                          <h4>
                            Billing Address
                            <small><a href="#">edit</a></small>
                          </h4>
                          <address>
                            <p><strong>Alex Tuntuni</strong></p>
                            <p>
                              1355 Market St, Suite 900
                              <br />
                              San Francisco, CA 94103
                            </p>
                            <p>Mobile: (123) 456-7890</p>
                          </address>
                        </div>
                        <div class="col-md-6 col-12 learts-mb-30">
                          <h4>
                            Shipping Address
                            <small><a href="#">edit</a></small>
                          </h4>
                          <address>
                            <p><strong>Alex Tuntuni</strong></p>
                            <p>
                              1355 Market St, Suite 900
                              <br />
                              San Francisco, CA 94103
                            </p>
                            <p>Mobile: (123) 456-7890</p>
                          </address>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="liton_tab_1_5">
                    <div class="ltn__myaccount-tab-content-inner mb-50">
                      <p>
                        Las siguientes direcciones se utilizarán en la página de
                        pago de forma predeterminada.
                      </p>
                      <div class="ltn__form-box">
                        <form action="#">
                          <div class="row mb-50">
                            <div class="col-md-6">
                              <label>Primer nombre:</label>
                              <input type="text" name="ltn__name" />
                            </div>
                            <div class="col-md-6">
                              <label>Primer apellido:</label>
                              <input type="text" name="ltn__lastname" />
                            </div>
                            {{--
                            <div class="col-md-6">
                              <label>Display Name:</label>
                              <input
                                type="text"
                                name="ltn__lastname"
                                placeholder="Ethan"
                              />
                            </div>
                            --}}
                            <div class="col-md-6">
                              <label>Editar correo:</label>
                              <input
                                type="email"
                                name="ltn__lastname"
                                placeholder="ejemplo@ejemplo.com"
                              />
                            </div>
                          </div>
                          <fieldset>
                            <legend>Cambiar contraseña</legend>
                            <div class="row">
                              <div class="col-md-12">
                                <label>Actual contraseña</label>
                                <input type="password" name="ltn__name" />
                                <label>Nueva contraseña:</label>
                                <input type="password" name="ltn__lastname" />
                                <label>Confirma tu nueva:</label>
                                <input type="password" name="ltn__lastname" />
                              </div>
                            </div>
                          </fieldset>
                          <div class="btn-wrapper">
                            <button
                              type="submit"
                              class="btn theme-btn-1 btn-effect-1 text-uppercase"
                            >
                              Guardar cambios
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- PRODUCT TAB AREA END -->
      </div>
    </div>
  </div>
</div>
<!-- WISHLIST AREA START -->

@endsection
