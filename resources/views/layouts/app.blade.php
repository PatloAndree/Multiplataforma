<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Identify - Encuentra el mejor precio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('asset/img/favicon.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('asset/css/font-icons.css') }}" />

    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('asset/css/plugins.css') }}" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}" />

    <link href="{{ asset('asset/css/nucleo.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/multiselect/multi-select.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="
    https://cdn.jsdelivr.net/npm/waitme@1.19.0/waitMe.min.css
    " rel="stylesheet">

    <style>
        .ms-container {
            width: 100%;
        }

        .ms-container {
            width: 100%;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
        }

        .acceso {
            color: #2b2929;
            cursor: pointer;
            padding: 10px;
            margin-top: 10px;
            font-size: 13px;
        }

        .acceso:hover {
            color: #1991cd;
            font-size: 13.5px;
        }
    </style>

    {{--
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}"
    />
    --}}
</head>

<body>
    @yield('header')
    <div class="body-wrapper">
        <header class="ltn__header-area ltn__header-3 section-bg-6">
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('asset/img/logo.png') }}" alt="Logo"
                                        class="" />
                                    Identify
                                </a>
                            </div>
                        </div>
                        <div class="col header-contact-serarch-column d-none d-xl-block">
                            <div class="header-contact-search">
                                <div class="header-search-2">
                                    <form id="#123" method="get" action="#">
                                        <input type="text" name="buscar" id="buscar" value=""
                                            placeholder="Busca lo que quieras aquí..." />
                                        <div id="contenedor"
                                            class="d-none position-absolute rounded-3 justify-content-evenly z-50 h-auto"
                                            style="
                          background-color: #ffff;
                          z-index: 99;
                          border: 1px solid #dddddd;
                        ">

                                            <div class="bg-light text-dark mb-1 p-1 pt-1">
                                                <span class="w-100 ps-3" style="font-size: 13px">
                                                    Resultados
                                                </span>
                                            </div>

                                            <div id="producto_lista"></div>

                                            <div class="">
                                                <img src="{{ asset('asset/img/slider/busqueda.png') }}"
                                                    class="w-100 h-25 d-block mx-auto pb-1 pt-1" />
                                            </div>

                                        </div>
                                        <button type="button" id="busqueda">
                                            <span><i class="icon-magnifier"></i></span>
                                        </button>
                                        {{-- Str::limit( $producto['nombre_producto'] , 30, '...')
                      --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- header-options -->
                            <div class="ltn__header-options">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__currency-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu">
                                            <ul>
                                                <li>
                                                    <a href="#" class="dropdown-toggle">
                                                        <span class="active-currency">USD</span>
                                                    </a>
                                                    <ul>
                                                        <li><a href="login.html">USD - US Dollar</a></li>
                                                        <li>
                                                            <a href="wishlist.html">CAD - Canada Dollar</a>
                                                        </li>
                                                        <li><a href="register.html">EUR - Euro</a></li>
                                                        <li>
                                                            <a href="account.html">GBP - British Pound</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">INR - Indian Rupee</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                BDT - Bangladesh Taka
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">JPY - Japan Yen</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                AUD - Australian Dollar
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="d-none">
                                        <!-- header-search-1 -->
                                        <div class="header-search-wrap">
                                            <div class="header-search-1">
                                                <div class="search-icon">
                                                    <i class="icon-magnifier for-search-show"></i>
                                                    <i class="icon-magnifier-remove for-search-close"></i>
                                                </div>
                                            </div>
                                            <div class="header-search-1-form">
                                                <form id="#" method="get" action="#">
                                                    <input type="text" name="search" value=""
                                                        placeholder="Search here..." />
                                                    <button type="submit">
                                                        <span><i class="icon-magnifier"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <!-- user-menu -->
                                        <div class="ltn__drop-menu user-menu">
                                            <ul>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center"><i
                                                            class="icon-user"></i>
                                                        <span style="font-size:14px;margin-left:10px">Mi cuenta</span>
                                                    </a>
                                                    <ul>

                                                        <li>
                                                            <a href="{{ route('login.index') }}">
                                                                Iniciar sesión
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('registro.index') }}">
                                                                Registrarse
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('perfil.index') }}">
                                                                Mi Cuenta
                                                            </a>
                                                        </li>
                                                        {{--
                              <li><a href="wishlist.html">Wishlist</a></li>
                              --}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- mini-cart 2 -->
                                        <div class="mini-cart-icon mini-cart-icon-2">
                                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                                <span class="mini-cart-icon">
                                                    <i class="icon-heart"></i>
                                                    <sup>1</sup>
                                                </span>
                                                <h6>
                                                    <span>Mis favoritos</span>
                                                    <span class="ltn__secondary-color"></span>
                                                </h6>
                                                @if (Auth::user())
                                                    <span>{{ Auth::user()->name }}</span>
                                                @endif
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Mobile Menu Button -->
                                        <div class="mobile-menu-toggle d-lg-none">
                                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                                <svg viewBox="0 0 800 600">
                                                    <path
                                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                                        id="top"></path>
                                                    <path d="M300,320 L540,320" id="middle"></path>
                                                    <path
                                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                                        id="bottom"
                                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->

            <!-- header-bottom-area start -->
            <div
                class="header-bottom-area ltn__border-top ltn__header-sticky ltn__sticky-bg-white ltn__primary-bg---- menu-color-white---- d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col header-menu-column justify-content-center" >
                            <div class="sticky-logo">
                                <div class="site-logo">
                                    <a href="{{ route('home') }}" class="animate__animated animate__bounce">
                                        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo"
                                            class="" />
                                        Identify
                                    </a>
                                </div>
                            </div>
                            <div class="header-menu header-menu-2">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li class="menu-icon">
                                                <a href="{{ route('home') }}">Principal</a>
                                                {{-- fas fa-arrow-down --}}
                                            </li>

                                            <li class="menu-icon">
                                                <a href="#" class="d-flex align-items-center">Categorías
                                                    <i class="fas fa-sort-down"></i>

                                                </a>
                                                <ul class="mega-menu column-3">
                                                    <li>
                                                        <a href="">
                                                            Tecnología
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '1') }}">
                                                                        <img src="https://sodimac.scene7.com/is/image/SodimacPeru/4178904_01?wid=800&hei=800&qlt=70"
                                                                            class="img-fluid"
                                                                            style="width:35px;height:35px"
                                                                            alt="" />
                                                                        Celulares
                                                                    </a>
                                                                </li>
                                                                <li>

                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            Electrohogar
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '2') }}">
                                                                        <img src="https://oechsle.vteximg.com.br/arquivos/ids/16469586-1000-1000/2336452.jpg?v=638327646266870000"
                                                                            class="img-fluid"
                                                                            style="width:35px;height:35px
                                                                        alt="" />

                                                                        Televidores
                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '3') }}">
                                                                        <img src="https://www.lacuracao.pe/media/catalog/product/r/e/refr-agh010_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700"
                                                                            class="img-fluid"
                                                                            style="width:35px;height:35px
                                                                        alt="" />

                                                                        Refrigeradoras
                                                                    </a>
                                                                </li>
                                                                <li>

                                                                    <a href="{{ route('shop.index', '13') }}">

                                                                        <img src="https://oechsle.vteximg.com.br/arquivos/ids/15595357-800-800/20329480.jpg?v=638279765776870000"
                                                                            class="img-fluid"
                                                                            style="width:35px;height:35px
                                                                        alt="" />
                                                                        Lavadoras
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            Gaming
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '5') }}">
                                                                        <img src="https://www.lacuracao.pe/media/catalog/product/1/5/15-fa0000la_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=400&width=400&canvas=400:400"
                                                                                class="img-fluid"
                                                                                style="width:35px;height:35px
                                                                            alt="" />
                                                                        Laptops
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '11') }}">
                                                                    <img src=https://www.lacuracao.pe/media/catalog/product/2/_/2_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=400&width=400&canvas=400:400"
                                                                            class="img-fluid"
                                                                            style="width:35px;height:35px
                                                                        alt="" />
                                                                        Consolas
                                                                    </a>
                                                                </li>
                                                              
                                                            </ul>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            Audio
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '6') }}">
                                                                        <img src="https://www.lacuracao.pe/media/catalog/product/d/_/d_nq_np_2x_956682-mla50924961354_072022-f.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700"
                                                                                class="img-fluid"
                                                                                style="width:35px;height:35px
                                                                            alt="" />
                                                                        Audio
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '11') }}">
                                                                    <img src="https://www.lacuracao.pe/media/catalog/product/x/1/x15promorado_1_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=400&width=400&canvas=400:400"
                                                                            class="img-fluid"
                                                                            style="width:35px;height:35px
                                                                        alt="" />
                                                                        Audifonos
                                                                    </a>
                                                                </li>
                                                                <!-- <li><a href="{{ route('shop.index', '') }}"><i
                                                                            class="fas fa-speakap"></i> SoundBar </a>
                                                                </li> -->
                                                            </ul>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            SmartHome
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('shop.index', '9') }}">
                                                                        <img src="https://www.lacuracao.pe/media/catalog/product/b/0/b09b93zdg4_principal_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=400&width=400&canvas=400:400"
                                                                                class="img-fluid"
                                                                                style="width:35px;height:35px
                                                                            alt="" />

                                                                        
                                                                        Asistente voz
                                                                    </a>
                                                                </li>
                                                               
                                                            </ul>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            Drones
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('shop.index','8') }}">
                                                                        <img src="https://www.lacuracao.pe/media/catalog/product/d/r/dronf20sycron_1_hohtzwesfcf3rcjr.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=400&width=400&canvas=400:400"
                                                                                    class="img-fluid"
                                                                                    style="width:35px;height:35px
                                                                        alt="" />
                                                                        Drones
                                                                    </a>
                                                                </li>
                                                                
                                                            </ul>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-icon">
                                                <a href="{{ route('ofertas.index') }}">Ofertas</a>
                                            </li>
                                          
                                            <li>
                                                <a href="{{ route('marcas.index') }}">Marcas</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-bottom-area end -->
        </header>

        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">Mi lista</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="mini-cart-product-area ltn__scrollbar">
                    {{-- @foreach ($users as $user)
            <p>This is user {{ $user->id }}</p>
            @endforeach --}} {{-- @php $valor = 4; @endphp --}} @for ($i = 1; $i < 3; $i++)
                        {{-- The current value is {{ $i }} --}}
                        <div class="mini-cart-item clearfix">
                            <div class="mini-cart-img">
                                <a href="#">
                                    <img src="{{ asset('asset/img/product/4.png') }}" alt="Image" />
                                </a>
                                {{--
                <span class="mini-cart-item-delete">
                  <i class="icon-trash"></i>
                </span>
                --}}
                            </div>
                            <div class="mini-cart-info">
                                <h6><a href="#">Pink Flower Tree {{ $i }}</a></h6>
                                <span class="mini-cart-quantity">1 x $68.00</span>
                            </div>
                        </div>
                    @endfor {{-- @while ($valor < 5) --}} {{-- @endwhile --}}
                </div>
                <div class="mini-cart-footer">
                    {{--
            <div class="mini-cart-sub-total">
              <h5>
                Subtotal:
                <span>$310.00</span>
              </h5>
            </div>
            --}}
                    <div class="btn-wrapper">
                        <a href="{{ route('listadeseo.index') }}" class="theme-btn-1 btn btn-effect-1">
                            Ver lista de deseos
                        </a>
                        {{--
              <a href="cart.html" class="theme-btn-2 btn btn-effect-2">
                Checkout
              </a>
              --}}
                    </div>
                    <p>Tu lista de deseos se guarda con tu cuenta</p>
                </div>
            </div>
        </div>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="#">
                            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" />
                            Identify
                        </a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search..." />
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Style - 01</a></li>
                                <li><a href="index-2.html">Home Style - 02</a></li>
                                <li><a href="index-3.html">Home Style - 03</a></li>
                                <li><a href="index-4.html">Home Style - 04</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li>
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li>
                                    <a href="shop-left-sidebar.html">Shop Left sidebar</a>
                                </li>
                                <li>
                                    <a href="shop-right-sidebar.html">Shop right sidebar</a>
                                </li>
                                <li><a href="product-details.html">Shop details</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li>
                                    <a href="blog-left-sidebar.html">News Left sidebar</a>
                                </li>
                                <li>
                                    <a href="blog-right-sidebar.html">News Right sidebar</a>
                                </li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li>
                                    <a href="portfolio-details.html">Portfolio Details</a>
                                </li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="icon-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="icon-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="icon-handbag"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li>
                            <a href="#" title="Facebook">
                                <i class="icon-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter">
                                <i class="icon-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Pinterest">
                                <i class="icon-social-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Instagram">
                                <i class="icon-social-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>
    </div>
    @yield('content') 
    <div class="body-wrapper">
   
        <!-- FOOTER AREA END -->

        <!-- MODAL AREA START (Añadir a favorito Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="modal-add-to-cart-content clearfix">
                                                <div class="modal-product-img">
                                                    <img src="img/product/1.png" alt="#" />
                                                </div>
                                                <div class="modal-product-info">
                                                    <h5>
                                                        <a href="product-details.html">Heart's Desire</a>
                                                    </h5>
                                                    <p class="added-cart">
                                                        <i class="fa fa-check-circle"></i>
                                                        Successfully added to your Cart
                                                    </p>
                                                    <div class="btn-wrapper">
                                                        <a href="cart.html" class="theme-btn-1 btn btn-effect-1">
                                                            View Cart
                                                        </a>
                                                        <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">
                                                            Checkout
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- additional-info -->
                                            <div class="additional-info d-none--">
                                                <p>
                                                    We want to give you
                                                    <b>10% discount</b>
                                                    for your first order,
                                                    <br />
                                                    Use (fiama10) discount code at checkout
                                                </p>
                                                <div class="payment-method">
                                                    <img src="img/icons/payment.png" alt="#" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL AREA END -->

        <!-- MODAL AREA START (Wishlist Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="modal-product-img">
                                                <img src="img/product/7.png" alt="#" />
                                            </div>
                                            <div class="modal-product-info">
                                                <h5>
                                                    <a href="product-details.html">
                                                        Brake Conversion Kit
                                                    </a>
                                                </h5>
                                                <p class="added-cart">
                                                    <i class="fa fa-check-circle"></i>
                                                    Successfully added to your Wishlist
                                                </p>
                                                <div class="btn-wrapper">
                                                    <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">
                                                        View Wishlist
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- additional-info -->
                                            <div class="additional-info d-none">
                                                <p>
                                                    We want to give you
                                                    <b>10% discount</b>
                                                    for your first order,
                                                    <br />
                                                    Use discount code at checkout
                                                </p>
                                                <div class="payment-method">
                                                    <img src="img/icons/payment.png" alt="#" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="ltn__footer-area">
            <div class="footer-top-area section-bg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Mi Cuenta</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="account.html">Mi cuenta</a></li>
                                        {{--
                      <li><a href="checkout.html">Checkout</a></li>
                      --}}
                                        <li><a href="contact.html">Contactanos</a></li>
                                        {{--
                      <li><a href="cart.html">Shopping Cart</a></li>
                      --}}
                                        <li><a href="wishlist.html">Lista de deseos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{--
              <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                <div class="footer-widget footer-menu-widget clearfix">
                  <h4 class="footer-title">Quick Links</h4>
                  <div class="footer-menu">
                    <ul>
                      <li><a href="locations.html">Store Location</a></li>
                      <li><a href="order-tracking.html">Orders Tracking</a></li>
                      <li><a href="product-details.html">Size Guide</a></li>
                      <li><a href="account.html">My account</a></li>
                      <li><a href="faq.html">FAQs</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              --}}
                        <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Información</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="contact.html">Privacidad</a></li>
                                        <li><a href="about.html">Acerca de</a></li>
                                        <li><a href="contact.html">Marcas</a></li>
                                        {{--
                      <li><a href="faq.html">Delivery Inforamtion</a></li>
                      --}}
                                        <li><a href="contact.html">Terminos & Condiciones</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{--
              <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                <div class="footer-widget footer-menu-widget clearfix">
                  <h4 class="footer-title">Customer Service</h4>
                  <div class="footer-menu">
                    <ul>
                      <li>
                        <a href="product-details.html">Shipping Policy</a>
                      </li>
                      <li><a href="contact.html">Help & Contact Us</a></li>
                      <li><a href="account.html">Returns & Refunds</a></li>
                      <li><a href="shop.html">Online Stores</a></li>
                      <li><a href="contact.html">Terms and Conditions</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              --}}
                        <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about-widget">
                                <h4 class="footer-title">Acerca de identify</h4>
                                <div class="footer-logo d-none">
                                    <div class="site-logo">
                                        <img src="img/logo.png" alt="Logo" />
                                    </div>
                                </div>
                                <p>
                                    Software que muestra productos y sus diferentes precios por
                                    tienda
                                </p>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-location-pin"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>Lima, Lima , Perú</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:+0123-456789">+941815133</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-envelope"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>
                                                    <a href="mailto:example@example.com">
                                                        Identify@gmail.com
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media d-none mt-20">
                                    <ul>
                                        <li>
                                            <a href="#" title="Facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Linkedin">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-payment-img">
                                    <img src="img/icons/payment-6.png" alt="Payment Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-5">
                <div class="ltn__border-top-2 container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="footer-copyright-left">
                                <div class="ltn__copyright-design clearfix">
                                    <p>
                                        &copy;
                                        <span class="current-year"></span>
                                        - IDENTIFY
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 align-self-center">
                            <div class="footer-copyright-right text-right">
                                <div class="ltn__copyright-menu d-none">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Claim</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media">
                                    <ul>
                                        <li>
                                            <a href="#" title="Facebook">
                                                <i class="icon-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Twitter">
                                                <i class="icon-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Pinterest">
                                                <i class="icon-social-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Instagram">
                                                <i class="icon-social-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    @yield('footer')
    <!-- All JS Plugins -->
    <script src="{{ asset('asset/js/plugins.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('asset/js/main.js') }}"></script>

    <script src="
    https://cdn.jsdelivr.net/npm/waitme@1.19.0/waitMe.min.js
    "></script>


    <script>
        // $( document ).ready(function() {
        // $('#busqueda').on('click', function(e) {
            $('#buscar').on('input', function(e) {
            var producto = $("#buscar").val();
            console.log(producto);
            v_token = "{{ csrf_token() }}";
            method = 'GET';
            $.ajax({
                url: "{{ route('buscar.data') }}/" + producto,
                type: "GET",
                data: {
                    _token: v_token,
                    _method: method
                },
                dataType: 'json',
                success: function(obj) {

                    console.log(obj.info.length);
                    console.log("pintando");
                    if (obj.sw_error == 0 && obj.info != "") {
                        $("#producto_lista").html("");
                        for (var i = 0; i < obj.info.length; i++) {
                            // var nombreProducto = obj.info[i].nombre_producto;
                            //    console.log(nombreProducto);
                            var src = obj.info[i].imagen_producto;
                            var nombreProducto = obj.info[i].nombre_producto;
                            var precioActual = obj.info[i].precio_actual;

                            var tienda = obj.info[i].tienda_producto === 16 
                                ? "Curacao" : obj.info[i].tienda_producto === 17 ? "Carsa"
                                : obj.info[i].tienda_producto === 18 ? "Oechsle" : "efe"
                            
                            ;


                            var nombreprod = nombreProducto.length > 40 ? nombreProducto.substring(0,
                                50) + '...' : nombreProducto;
                            var id = obj.info[i].id;
                            var url = '{{ route('productodetalle.index', 'id') }}';
                            url = url.replace('id', id);

                            var nombreHTML =
                                `
                              <a href='${url}'>
                              <div class="d-flex">
                                  <div class="col-3">
                                      <img src="${src}" alt="" >
                                  </div>
                                  <div class="col-9">
                                    <p>${nombreprod}</p>    
                                    <p>S/.${precioActual} - 
                                    
                                    ${tienda}
                                    
                                    </p>
                                  </div>
                                  </div>
                                </a>
                              `

                            ;

                            $("#contenedor").removeClass('d-none');

                            $("#producto_lista").append(nombreHTML);
                        }
                    } else {
                        $("#contenedor").removeClass('d-none');
                        $("#producto_lista").html(
                            `<span class='ps-3'> No se encontro... ${producto} </span>`
                        );
                    }
                }
            });
        });
        // });

        $('#buscar').on('click', function(e) {
            var producto = $(this).val();
            $("#producto_lista").html("");
            $("#contenedor").addClass('d-none');

        });


        // $(document).click(function(){
        //     // alert("has pulsado en botón");
        //     $("#producto_lista").html("");

        //     $("#contenedor").addClass('d-none');
        //     $("#buscar").val("");
        //     // si lo deseamos podemos eliminar el evento click
        //     // una vez utilizado por primera vez
        //     // $(document).unbind("click");
        // })
    </script>
</body>

</html>
@section('page-script')
@endsection
