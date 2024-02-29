{{-- @extends('layouts.inicio') --}}
@extends('layouts.app')
<style>
    th {
        /* background-color: blue; */
        color: rgb(85, 84, 84);
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
        font-size: 15px;
    }
</style>

@section('content')
    <div class="body-wrapper">

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner text-center">
                            <h1 class="ltn__page-title">Detalle de producto</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="{{ route('home') }}">Inicio</a></li>
                                    <li>Detalle de producto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOP DETAILS AREA START -->
        <div class="ltn__shop-details-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ltn__shop-details-inner">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ltn__shop-details-img-gallery ltn__shop-details-img-gallery-2">
                                        <div class="ltn__shop-details-small-img slick-arrow-2">


                                            <div class="single-small-img">
                                                <img src="{{ asset($producto['imagen_producto']) }}" alt="Image">
                                            </div>

                                            <div class="single-small-img">
                                                <img src="{{ asset($producto['imagen_producto']) }}" alt="Image">
                                            </div>
                                            @php
                                                $imageUrl = $producto['imagen_producto'];
                                                $imageName = basename($imageUrl);
                                            @endphp
                                        </div>
                                        {{-- LAS IMAGENES GRANDES AQUI --}}
                                        <div class="ltn__shop-details-large-img">

                                            @if ($producto['tienda_producto'] == 16)
                                                <div class="single-large-img">
                                                    <a href="{{ $imageUrl }}" data-rel="lightcase:myCollection">
                                                        <img src="{{ $imageUrl }}" alt="">
                                                    </a>
                                                </div>
                                            @else
                                                <div class="single-large-img">
                                                    <a href="{{ $imageUrl }}" data-rel="lightcase:myCollection">
                                                        <img src="{{ $imageUrl }}" alt="">
                                                    </a>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-product-info shop-details-info pl-0">
                                        <h3><?php echo $producto['nombre_producto']; ?></h3>
                                        <div class="product-price-ratting mb-20">
                                            <ul>
                                                <li>
                                                    <div class="product-price">
                                                        <span>S/. <?php echo $producto['precio_actual']; ?></span>
                                                        <del>S/.<?php echo $producto['precio_actual'] - 20; ?>.00</del>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-product-brief">
                                            <p>
                                            <p class="fw-bold fs-6"></p>
                                            </p>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                            <ul>
                                                <li>
                                                    <div class="ltn__color-widget clearfix">
                                                        {{-- <strong class="d-meta-title">Marca</strong> --}}
                                                        <p class="fw-bold fs-6"><?php echo $producto['marca_producto']; ?></p>
                                                    </div>
                                                </li>
                                                {{-- <li>
                                                <div class="ltn__size-widget clearfix mt-25">
                                                    <strong class="d-meta-title">Size</strong>
                                                    <ul>
                                                        <li><a href="#">S</a></li>
                                                        <li><a href="#">M</a></li>
                                                        <li><a href="#">L</a></li>
                                                        <li><a href="#">XL</a></li>
                                                        <li><a href="#">XXL</a></li>
                                                    </ul>
                                                </div>
                                            </li> --}}
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                            <ul>
                                                {{-- <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li> --}}
                                                <li>
                                                    {{-- <a href="<?php $producto['link']; ?>" class="theme-btn-1 btn btn-effect-1 d-add-to-cart" title="ir a la web" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal"> --}}
                                                    <a href="<?php echo $producto['link']; ?>"
                                                        class="theme-btn-1 btn btn-effect-1 d-add-to-cart" target="_blank"
                                                        title="ir a la web">

                                                        <span>Ir a web</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-effect-1 d-add-to-wishlist"
                                                        title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__social-media mb-30">
                                            <ul>
                                                <li class="d-meta-title">Compartir:</li>
                                                <li><a href="#" title="Facebook"><i
                                                            class="icon-social-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i
                                                            class="icon-social-twitter"></i></a></li>
                                                <li><a href="#" title="Pinterest"><i
                                                            class="icon-social-pinterest"></i></a></li>
                                                <li><a href="#" title="Instagram"><i
                                                            class="icon-social-instagram"></i></a></li>
                                                {{-- {{asset('asset/img/brand-logo/carsa.png')}} --}}
                                            </ul>
                                        </div>
                                        <div class="row col-md-12  ">
                                            <table class="table  table-borderless ">
                                                <thead class="thead-dark class=">
                                                    <tr>
                                                        <th  class="fw-bold">Nombre</th>
                                                        <th class=" text-center fw-bold">Precio</th>
                                                        <th class=" text-center fw-bold">Tienda</th>
                                                        <!-- <th>Link</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($productosSimilares->sortBy('precio_actual') as $producto)
                                                        <tr>
                                                            <!-- <td class="w-25">
                                                                </td> -->
                                                                <td class="d-flex justify-content-start align-items-center">
                                                                <img  src="{{ asset($producto['imagen_producto']) }}"
                                                                    alt="" style="width: 50px;">
                                                                <p style="font-size:13.3px">
                                                                    <?php echo Str::limit($producto['nombre_producto'], 40, '...'); ?>
                                                                </p>
                                                            </td>

                                                            <td>
                                                                <p style="font-size:13px;font-weight:bold">
                                                                    S/.<?php echo $producto['precio_actual']; ?>
                                                                </p>
                                                            </td>

                                                            <td class="text-center">
                                                                <a href="<?php echo $producto['link']; ?>" target="_blank">
                                                                    @if ($producto->tienda_producto === 16)
                                                                        <img src="{{ asset('asset/img/brand-logo/curacao.png') }}"
                                                                            alt="" style="width: 40px;">
                                                                    @elseif ($producto->tienda_producto === 17)
                                                                        <img src="{{ asset('asset/img/brand-logo/carsa.png') }}"
                                                                            alt="{{ $producto->nombre_producto }}"
                                                                            style="width: 40px;">
                                                                    @elseif ($producto->tienda_producto === 18)
                                                                        <img src="{{ asset('asset/img/brand-logo/oechsle.png') }}"
                                                                            alt="{{ $producto->nombre_producto }}"
                                                                            style="width: 40px;">
                                                                    @else
                                                                        <img src="{{ asset('asset/img/brand-logo/efe.png') }}"
                                                                            alt="{{ $producto->nombre_producto }}"
                                                                            style="width: 40px;">
                                                                    @endif
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                                            <ul>
                                                <li></li>
                                                <li>
                                                    <strong>Categorias:</strong>
                                                    <span>
                                                        <a href="#">
                                                            {{ $nombreCategoria }}
                                                        </a>
                                                    </span>
                                                </li>
                                                <li>
                                                    <strong>Tags:</strong>
                                                    <span>
                                                        <a href="#"> {{ $nombreCategoria }}</a>
                                                        <a href="#">tags</a>
                                                        <a href="#">favorito</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__safe-checkout d-none">
                                            <h5>Guaranteed Safe Checkout</h5>
                                            <img src="img/icons/payment-2.png" alt="Payment Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP DETAILS AREA END -->

        <!-- SHOP DETAILS TAB AREA START -->
        <div class="ltn__shop-details-tab-area pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__shop-details-tab-inner">
                            <div class="ltn__shop-details-tab-menu">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab"
                                        href="#liton_tab_details_1_1">Descripción</a>
                                    <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Comentarios</a>
                                    {{-- <a data-bs-toggle="tab" href="#liton_tab_details_1_3" class="">Commentarios</a> --}}
                                    {{-- <a data-bs-toggle="tab" href="#liton_tab_details_1_4" class="">Shipping</a> --}}
                                    <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_5" class="">Size Chart</a> -->
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                    <div class="ltn__shop-details-tab-content-inner ">
                                        <table class="table table-striped color">
                                            <tbody>
                                                <tr>
                                                    <th>Procesador</th>
                                                    <td>MediaTek</td>
                                                </tr>
                                                <tr>
                                                    <th>Cámara</th>
                                                    <td>De 48 MP a 50 MP</td>
                                                </tr>
                                                <tr>
                                                    <th>Pantalla (pulgadas)</th>
                                                    <td>De 6" a 6.5"</td>
                                                </tr>
                                                <tr>
                                                    <th>Cámara frontal</th>
                                                    <td>
                                                        8 MP</td>
                                                </tr>
                                                <tr>
                                                    <th>Dual SIM</th>
                                                    <td>
                                                        Sí</td>
                                                </tr>
                                                <tr>
                                                    <th>Cámara principal</th>
                                                    <td>50 + 8 + 2 + 2 MP</td>
                                                </tr>
                                                <tr>
                                                    <th>Memoria Interna</th>
                                                    <td>128 GB</td>
                                                </tr>
                                                <tr>
                                                    <th>Memoria RAM</th>
                                                    <td>4 GB</td>
                                                </tr>
                                                <tr>
                                                    <th>Tamaño de pantalla</th>
                                                    <td>6.5"</td>
                                                </tr>
                                                <tr>
                                                    <th>Resolución de pantalla</th>
                                                    <td>2400 x 1080 (FHD+)</td>
                                                </tr>
                                                <tr>
                                                    <th>Tipo de pantalla</th>
                                                    <td>LCD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_2">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <div class="customer-reviews-head text-center">
                                            <h4 class="title-2">Customer Reviews</h4>
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <!-- comment-area -->
                                                <div class="ltn__comment-area mb-30">
                                                    <div class="ltn__comment-inner">
                                                        <ul>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="img/testimonial/1.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <div class="product-ratting">
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star-half-alt"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="far fa-star"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Doloribus, omnis fugit
                                                                            corporis iste magnam ratione.</p>
                                                                        <span class="ltn__comment-reply-btn">September 3,
                                                                            2020</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="img/testimonial/3.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <div class="product-ratting">
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star-half-alt"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="far fa-star"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Doloribus, omnis fugit
                                                                            corporis iste magnam ratione.</p>
                                                                        <span class="ltn__comment-reply-btn">September 2,
                                                                            2020</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="img/testimonial/2.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <div class="product-ratting">
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-star-half-alt"></i></a>
                                                                                </li>
                                                                                <li><a href="#"><i
                                                                                            class="far fa-star"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Doloribus, omnis fugit
                                                                            corporis iste magnam ratione.</p>
                                                                        <span class="ltn__comment-reply-btn">September 2,
                                                                            2020</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <!-- comment-reply -->
                                                <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                                    <form action="#">
                                                        <h4 class="title-2">Add a Review</h4>
                                                        <div class="mb-30">
                                                            <div class="add-a-review">
                                                                <h6>Your Ratings:</h6>
                                                                <div class="product-ratting">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star-half-alt"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="far fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <textarea placeholder="Type your comments...."></textarea>
                                                        </div>
                                                        <div class="input-item input-item-name ltn__custom-icon">
                                                            <input type="text" placeholder="Type your name....">
                                                        </div>
                                                        <div class="input-item input-item-email ltn__custom-icon">
                                                            <input type="email" placeholder="Type your email....">
                                                        </div>
                                                        <div class="input-item input-item-website ltn__custom-icon">
                                                            <input type="text" name="website"
                                                                placeholder="Type your website....">
                                                        </div>
                                                        <label class="mb-0"><input type="checkbox" name="agree"> Save
                                                            my name, email, and website in this browser for the next time I
                                                            comment.</label>
                                                        <div class="btn-wrapper">
                                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                                                type="submit">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_3">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <!-- comment-area -->
                                        <div class="ltn__comment-area mb-30">
                                            <h4 class="title-2">Comments (5)</h4>
                                            <div class="ltn__comment-inner">
                                                <ul>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="img/testimonial/1.jpg" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i
                                                                        class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="img/testimonial/3.jpg" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i
                                                                        class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="img/testimonial/4.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <span class="comment-date">20th May 2020</span>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Doloribus, omnis fugit
                                                                            corporis iste magnam ratione.</p>
                                                                        <a href="#"
                                                                            class="ltn__comment-reply-btn"><i
                                                                                class="fas fa-reply"></i>Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="img/testimonial/1.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <span class="comment-date">20th May 2020</span>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Doloribus, omnis fugit
                                                                            corporis iste magnam ratione.</p>
                                                                        <a href="#"
                                                                            class="ltn__comment-reply-btn"><i
                                                                                class="fas fa-reply"></i>Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="img/testimonial/2.jpg" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i
                                                                        class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- comment-reply -->
                                        <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                            <form action="#">
                                                <h4 class="title-2">Leave a Reply</h4>
                                                <div class="input-item input-item-textarea ltn__custom-icon">
                                                    <textarea placeholder="Type your comments...."></textarea>
                                                </div>
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" placeholder="Type your name....">
                                                </div>
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" placeholder="Type your email....">
                                                </div>
                                                <div class="input-item input-item-website ltn__custom-icon">
                                                    <input type="text" name="website"
                                                        placeholder="Type your website....">
                                                </div>
                                                <label class="mb-0"><input type="checkbox" name="agree"> Save my
                                                    name, email, and website in this browser for the next time I
                                                    comment.</label>
                                                <div class="btn-wrapper">
                                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                                        type="submit"><i class="far fa-comments"></i> Post
                                                        Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_4">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <h4 class="title-2">Shipping policy for our store</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam voluptates rerum
                                            neque ea libero numquam officiis ipsum, consectetur ducimus dicta in earum
                                            repellat sunt ab odit laboriosam cupiditate ipsam, doloremque.</p>
                                        <ul>
                                            <li>1-2 business days (Typically by end of day)</li>
                                            <li><a href="#">30 days money back guaranty</a></li>
                                            <li>24/7 live support</li>
                                            <li>odio dignissim qui blandit praesent</li>
                                            <li>luptatum zzril delenit augue duis dolore</li>
                                            <li>te feugait nulla facilisi.</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, quia vel
                                            eligendi ipsam. Ea, quasi quam ducimus recusandae unde ipsa nam rem a minus
                                            tenetur quae sint voluptatem voluptate inventore.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_5">
                                    <div class="ltn__shop-details-tab-content-inner">

                                        <div class="table-1 mb-20">
                                            <table class="">
                                                <tbody>
                                                    <tr>
                                                        <th>SIZE</th>
                                                        <th>XS</th>
                                                        <th>S</th>
                                                        <th>S/M</th>
                                                        <th>M</th>
                                                        <th>M/L</th>
                                                        <th>L</th>
                                                        <th>XL</th>
                                                    </tr>
                                                    <tr data-bs-region="uk">
                                                        <th>UK</th>
                                                        <td>4</td>
                                                        <td>6 - 8</td>
                                                        <td>6 - 10</td>
                                                        <td>10 - 12</td>
                                                        <td>12 - 16</td>
                                                        <td>14 - 16</td>
                                                        <td>18</td>
                                                    </tr>
                                                    <tr data-bs-region="eur">
                                                        <th>
                                                            <span class="mobile-show">EUR</span><span
                                                                class="mobile-none">EUROPE</span>
                                                        </th>
                                                        <td>32</td>
                                                        <td>34 - 36</td>
                                                        <td>34 - 38</td>
                                                        <td>38 - 40</td>
                                                        <td>40 - 44</td>
                                                        <td>42 - 44</td>
                                                        <td>46</td>
                                                    </tr>
                                                    <tr data-bs-region="usa">
                                                        <th>
                                                            <span>USA/</span><span class="mobile-none">CANADA</span><span
                                                                class="mobile-show"> CA</span>
                                                        </th>
                                                        <td>0</td>
                                                        <td>2 - 4</td>
                                                        <td>2 - 6</td>
                                                        <td>6 - 8</td>
                                                        <td>8 - 12</td>
                                                        <td>10 - 12</td>
                                                        <td>14</td>
                                                    </tr>
                                                    <tr data-bs-region="aus">
                                                        <th>AUS / NZ</th>
                                                        <td>4</td>
                                                        <td>6 - 8</td>
                                                        <td>6 - 10</td>
                                                        <td>10 - 12</td>
                                                        <td>12 - 16</td>
                                                        <td>14 - 16</td>
                                                        <td>18</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP DETAILS TAB AREA END -->
        <!-- BRAND LOGO AREA START -->

        <!-- BRAND LOGO AREA END -->
    </div>
@endsection
