
@extends('layouts.app')


@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Super ofertas</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Inicio</a></li>
                                <li>Ofertas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area  mt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{asset('asset/img/banner/banner.jpg')}}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{asset('asset/img/banner/banner.jpg')}}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{asset('asset/img/banner/banner.jpg')}}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

    <!-- PRODUCT AREA START -->
    <div class="ltn__product-area ltn__product-gutter  pt-35 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">Productos en lanzamiento</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- ltn__product-item -->
                    @foreach ($productos as $producto)
                        
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 ">

                            <div class="ltn__product-item text-center borde-caja ">
                                <div class="product-img">
                                    <input type="text" id="codigo_producto" value="<?php echo $producto['id'] ?>" class="d-none">
                                    <a href="{{route('shop.index')}}"><img src="{{asset($producto["imagen_producto"])}}" alt="#"></a>
                                    <div class="product-badge">
                                        <ul>
                                            <li class="badge-1">12%</li>
                                        </ul>
                                    </div>
                                    <div class="product-hover-action product-hover-action-2">
                                        <ul>
                                            {{-- <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </li> --}}
                                            <li class="add-to-cart">
                                                <a href="#" title="Añadir a favorito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                    <span class="cart-text d-none d-xl-block">Añadir a favorito</span>
                                                    <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="icon-shuffle"></i>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info pt-1">
                                    <div class="row ">  {{--align-self-start --}}
                                        <span class="fs-6 fw-bold "><?php echo $producto['marca_producto'] ?></span>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <h2 class="product-title">
                                                <a href="{{route('shop.index')}}">
                                                    <?php echo Str::limit( $producto['nombre_producto'] , 30, '...') ?>     
                                                </a>
                                            </h2>
                                            <div class="product-price">
                                                <span>S/. <?php echo $producto['precio_actual'] ?></span>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-3 "> --}}
                                            {{-- <img src="{{asset('asset/img/brand-logo/curacao.png')}}" class="img-fluid" > --}}
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <!-- ltn__product-item -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- PRODUCT SLIDER CELULARES START -->
    <div class="ltn__product-slider-area ltn__product-gutter  pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">Celulares en oferta</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active slick-arrow-1 ">
                <!-- ltn__product-item -->
                @foreach ($celulares as $producto)
                    <div class="col-9">
                        <div class="ltn__product-item text-center borde-caja">
                            <div class="product-img">
                                <a href="{{route('productodetalle.index')}}"><img src="{{asset($producto["imagen_producto"])}}" alt="#" class="rounded mx-auto d-block"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="badge-2">13%</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action product-hover-action-2">
                                    <ul>
                                      
                                        <li class="add-to-cart">
                                            <a href="#" title="Añadir a favorito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <span class="cart-text d-none d-xl-block">Añadir a favorito</span>
                                                <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="row ">  {{--align-self-start --}}
                                    <span class="fs-6 fw-bold "><?php echo $producto['marca_producto'] ?></span>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="product-title">
                                            <a href="{{route('productodetalle.index')}}">
                                                <?php echo Str::limit( $producto['nombre_producto'] , 30, '...') ?>     
                                            </a>
                                        </h2>
                                        <div class="product-price">
                                            <span>S/.  <?php echo $producto['precio_actual'] ?></span>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3 ">
                                        <img src="{{asset('asset/img/brand-logo/curacao.png')}}" class="img-fluid" >
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                @endforeach 
                
            </div>
        </div>
    </div>
    <!-- PRODUCT CELULARES AREA END -->

      <!-- PRODUCT SLIDER TELEVISORES START -->
    <div class="ltn__product-slider-area ltn__product-gutter  pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">Celulares en oferta</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active slick-arrow-1 ">
                <!-- ltn__product-item -->
                @foreach ($televisores as $producto)
                    <div class="col-9">
                        <div class="ltn__product-item text-center borde-caja">
                            <div class="product-img">
                                <a href="{{route('productodetalle.index')}}"><img src="{{asset($producto["imagen_producto"])}}" alt="#" class="rounded mx-auto d-block"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="badge-2">13%</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action product-hover-action-2">
                                    <ul>
                                      
                                        <li class="add-to-cart">
                                            <a href="#" title="Añadir a favorito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <span class="cart-text d-none d-xl-block">Añadir a favorito</span>
                                                <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="row ">  {{--align-self-start --}}
                                    <span class="fs-6 fw-bold "><?php echo $producto['marca_producto'] ?></span>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="product-title">
                                            <a href="{{route('productodetalle.index')}}">
                                                <?php echo Str::limit( $producto['nombre_producto'] , 30, '...') ?>     
                                            </a>
                                        </h2>
                                        <div class="product-price">
                                            <span>S/.  <?php echo $producto['precio_actual'] ?></span>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3 ">
                                        <img src="{{asset('asset/img/brand-logo/curacao.png')}}" class="img-fluid" >
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                @endforeach 
                
            </div>
        </div>
    </div>
    <!-- PRODUCT CELULARES AREA END -->

      <!-- PRODUCT SLIDER REFRIGERADORAS START -->
    <div class="ltn__product-slider-area ltn__product-gutter  pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">Celulares en oferta</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active slick-arrow-1 ">
                <!-- ltn__product-item -->
                @foreach ($refrigeradoras as $producto)
                    <div class="col-9">
                        <div class="ltn__product-item text-center borde-caja">
                            <div class="product-img">
                                <a href="{{route('productodetalle.index')}}"><img src="{{asset($producto["imagen_producto"])}}" alt="#" class="rounded mx-auto d-block"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="badge-2">13%</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action product-hover-action-2">
                                    <ul>
                                      
                                        <li class="add-to-cart">
                                            <a href="#" title="Añadir a favorito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <span class="cart-text d-none d-xl-block">Añadir a favorito</span>
                                                <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="row ">  {{--align-self-start --}}
                                    <span class="fs-6 fw-bold "><?php echo $producto['marca_producto'] ?></span>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="product-title">
                                            <a href="{{route('productodetalle.index')}}">
                                                <?php echo Str::limit( $producto['nombre_producto'] , 30, '...') ?>     
                                            </a>
                                        </h2>
                                        <div class="product-price">
                                            <span>S/.  <?php echo $producto['precio_actual'] ?></span>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3 ">
                                        <img src="{{asset('asset/img/brand-logo/curacao.png')}}" class="img-fluid" >
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                @endforeach 
                
            </div>
        </div>
    </div>
    <!-- PRODUCT CELULARES AREA END -->

      <!-- PRODUCT SLIDER COCINAS START -->
    <div class="ltn__product-slider-area ltn__product-gutter  pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">Celulares en oferta</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active slick-arrow-1 ">
                <!-- ltn__product-item -->
                @foreach ($cocinas as $producto)
                    <div class="col-9">
                        <div class="ltn__product-item text-center borde-caja">
                            <div class="product-img">
                                <a href="{{route('productodetalle.index')}}"><img src="{{asset($producto["imagen_producto"])}}" alt="#" class="rounded mx-auto d-block"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="badge-2">13%</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action product-hover-action-2">
                                    <ul>
                                      
                                        <li class="add-to-cart">
                                            <a href="#" title="Añadir a favorito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <span class="cart-text d-none d-xl-block">Añadir a favorito</span>
                                                <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="row ">  {{--align-self-start --}}
                                    <span class="fs-6 fw-bold "><?php echo $producto['marca_producto'] ?></span>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="product-title">
                                            <a href="{{route('productodetalle.index')}}">
                                                <?php echo Str::limit( $producto['nombre_producto'] , 30, '...') ?>     
                                            </a>
                                        </h2>
                                        <div class="product-price">
                                            <span>S/.  <?php echo $producto['precio_actual'] ?></span>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3 ">
                                        <img src="{{asset('asset/img/brand-logo/curacao.png')}}" class="img-fluid" >
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                @endforeach 
                
            </div>
        </div>
    </div>
    <!-- PRODUCT CELULARES AREA END -->

      <!-- PRODUCT SLIDER CELULARES START -->
    <div class="ltn__product-slider-area ltn__product-gutter  pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">Celulares en oferta</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active slick-arrow-1 ">
                <!-- ltn__product-item -->
                @foreach ($celulares as $producto)
                    <div class="col-9">
                        <div class="ltn__product-item text-center borde-caja">
                            <div class="product-img">
                                <a href="{{route('productodetalle.index')}}"><img src="{{asset($producto["imagen_producto"])}}" alt="#" class="rounded mx-auto d-block"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="badge-2">13%</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action product-hover-action-2">
                                    <ul>
                                      
                                        <li class="add-to-cart">
                                            <a href="#" title="Añadir a favorito" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <span class="cart-text d-none d-xl-block">Añadir a favorito</span>
                                                <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="row ">  {{--align-self-start --}}
                                    <span class="fs-6 fw-bold "><?php echo $producto['marca_producto'] ?></span>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="product-title">
                                            <a href="{{route('productodetalle.index')}}">
                                                <?php echo Str::limit( $producto['nombre_producto'] , 30, '...') ?>     
                                            </a>
                                        </h2>
                                        <div class="product-price">
                                            <span>S/.  <?php echo $producto['precio_actual'] ?></span>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3 ">
                                        <img src="{{asset('asset/img/brand-logo/curacao.png')}}" class="img-fluid" >
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                @endforeach 
                
            </div>
        </div>
    </div>
    <!-- PRODUCT CELULARES AREA END -->

  
@endsection
