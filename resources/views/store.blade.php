@extends('layouts.app')

<body>
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img class="logo" src="assets/images/logo.png" alt="Logo" width="100px" height="100px">
                            <h1 class="dulce">Dulce Violeta</h1>
                        </a>
                        <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="/index.html">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="productos.html">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/ofertas.html">Ofertas</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/sobrenosotros.html">Sobre Nosotros</a>
                                </li>

                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/danostuopinion.html">Dejanos tu opinión</a>
                                </li>
                            </ul>
                            <!-- navbar nav -->
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </header>
<div class="row">
    <div class="col-12 d-flex pt-5 justify-content-center">
        {{ $productos->links() }}
    </div>
</div>

<div class="container-fuid mt-1 mb-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2 filtros p-5 text-center rounded">
            <h3>Categorias</h3><hr>s
            @foreach($categories as $category)
            <a href="{{ route('store-filtrado' , $category->id) }}">
                <h4>{{ $category->name }}</h4>
            </a>
@endforeach
<a href="{{ route ('store') }}"><h4>Todos</h4></a>
        </div>
    <div class="col-1"></div>
<div class="col-7">
    <div class="d-flex flex-wrap justify-content-around">
        @foreach ($products as $product)
        <div class="p-2 m-1 border bg-ligth text-center">
            <h3>{{ $product ->name}}</h3><hr>
            <img src="{{
                asset('strorage').'/'.$product->image}}" style="width: 200px;" alt=""><hr>
        </div>
                <h3><span class="badge badge-success">
                    Precio: ${{ number_format ($product -> price,2) }}
                </span></h3>
                    <p>
                    <a class="btn btn-warning" href=" {{route('card-add', $product ->slug) }}"> <i class="fa fa -cart-plus"></i> La quiero</a>
                    <a class="btn btn-primary" href="{{route('product-detail', $product ->alug) }}"> <i class="fa fa-chevron-circle-right"></i>Leer más</a>
                    </p>
 
            </div>
</div>
@endforeach
    </div>
</div>
<div class="col-1"></div>
</div>
</div>
<div class="row">
<div class="col-12 d-flex pt-5 justify-content-center">
    {{ $products->links() }}
</div>
</div>
<br class="mb-3">
@stop

</body>

</html>