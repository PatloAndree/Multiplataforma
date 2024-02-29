
@extends('layouts.app')


@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Marcas</h1>
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

    <div class="d-flex justify-content-center">
        <h1>Resultados generales</h1>
        <div>
        </div>

        <div>
        <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Imagen</th>
                <th>Link</th>
                <th>Categoría</th>
                <th>Tienda</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            {{
               json_encode($productos)
            }}
           
        </tbody>
    </table>
        </div>
    </div>

  
  
  
@endsection
