@extends('layouts.app')


@section('content')

<div class="body-wrapper">


    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Categorias</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Inicio</a></li>
                                <li>Audio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 order-lg-2 mb-100">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                               <div class="showing-product-number text-right">
                                    <span>mostrando 9 de 20 resultados</span>
                                </div> 
                            </li>
                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Arreglo normal</option>
                                        <option>Menor precio a mayor</option>
                                        {{-- <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option> --}}
                                    </select>
                                </div>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="icon-grid"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="icon-menu"></i></a>
                                    </div>
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    @foreach ($productos as $producto)
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="ltn__product-item text-center">
                                                <div class="product-img">
                                                    <a href="{{route('productodetalle.index')}}"><img src="{{asset($producto["imagen_producto"])}}" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="badge-1">Hot</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action product-hover-action-2">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                    <i class="icon-magnifier"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart">
                                                                <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
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
                                                                <a href="{{route('productodetalle.index')}}">
                                                                    <?php echo Str::limit( $producto['nombre_producto'] , 30, '...') ?>     
                                                                </a>
                                                            </h2>
                                                            <div class="product-price">
                                                                <span><?php echo $producto['precio_actual'] ?></span>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-md-3 ">
                                                            <a href="<?php echo $producto['link']  ?> " target="_blank">
                                                                <img src="{{asset('asset/img/brand-logo/curacao.png')}}" class="img-fluid" >
                                                            </a>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach 
                                  
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    @foreach ($productos as $producto)
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item">
                                                <div class="product-img col-md-5">
                                                    <a href="product-details.html"><img src="{{asset($producto["imagen_producto"])}}" alt="#" class=""></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="badge-1">Hot</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-title"><a href="product-details.html"><?php echo $producto['marca_producto'] ?></a></h2>
                                                    <div class="product-price">
                                                        <span><?php echo $producto['precio_actual'] ?></span>
                                                    </div>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-brief">
                                                        <p><?php echo $producto['nombre_producto'] ?></p>
                                                    </div>
                                                    <div class="product-hover-action product-hover-action-2">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                    <i class="icon-magnifier"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart">
                                                                <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                    <span class="cart-text d-none d-xl-block">Añadir a favorito</span>
                                                                    <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo $producto['link']?>" target="_blank" title="Ir a web">
                                                                    <i class="icon-shuffle"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- ltn__product-item -->
                                   
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class=" d-flex justify-content-center" >
                        {!! $productos->links() !!}
                    </div>                  
                </div>
                <div class="col-lg-2  mb-100">
                    <aside class="sidebar ltn__shop-sidebar">
                        <!-- Search Widget -->
                        {{-- <div class="widget ltn__search-widget">
                            <form action="#">
                                <input type="text" name="search" placeholder="Busca una palabra...">
                                <button type="submit"><i class="icon-magnifier"></i></button>
                            </form>
                        </div> --}}
                        <!-- Price Filter Widget -->
                        <div class="widget ltn__price-filter-widget">
                            <h4 class="ltn__widget-title">Filtros:</h4>
                            {{-- <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit"  value="Tu rango:"/> 
                                    <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                                </div>
                                <div class="slider-range"></div>
                            </div> --}}
                        </div>
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title">Marcas</h4>
                            <ul>
                                @foreach ($marca_audio as $marca)
                                <li>                                   
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <?php echo $marca['marca_producto'] ?>
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Color Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title">Precios</h4>
                            <ul>
                                @for ($i = 1; $i < 4; $i++)
                                <li>                                   
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            De 1200 {{$i}} a 1400
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </li>
                                @endfor
                            </ul>
                        </div>
                        <!-- Size Widget -->
                      
                        <!-- Tagcloud Widget -->
                        <div class="widget ltn__tagcloud-widget">
                            <h4 class="ltn__widget-title">Tags</h4>
                            <ul>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">desgin</a></li>
                                <li><a href="#">ux</a></li>
                                <li><a href="#">usability</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">icon</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Repairs</a></li>
                                <li><a href="#">Auto Parts</a></li>
                                <li><a href="#">Oil</a></li>
                                <li><a href="#">Dealer</a></li>
                                <li><a href="#">Oil Change</a></li>
                                <li><a href="#">Body Color</a></li>
                            </ul>
                        </div>
                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border---">Top Rated Product</h4>
                            <ul>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Mixel Solid Seat Cover</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Brake Conversion Kit</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Coil Spring Conversion</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="#" alt="#"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
      <!-- PRODUCT DETAILS AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area  ltn__brand-logo-1 section-bg-1 pt-35 pb-35 plr--5">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/4.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->


</div>

@endsection


