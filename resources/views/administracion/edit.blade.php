<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de productos</title>
    <link rel="icon" href="/assets/logos/logo.ico">
    <link rel="stylesheet" href="/css/style_admin.css">
</head>
<body>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="/inicio" class="nav__logo">
               <img src="/assets/logos/logo.png" alt="logo_image">
                Ferreteria Chuquilluri
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/inicio" class="nav__link">Inicio</a>
                    </li>

                    <li class="nav__item">
                        <a href="/productos" class="nav__link">Productos</a>
                    </li>

                    <li class="nav__item">
                        <a href="/administracion" class="nav__link">Agregar productos</a>
                    </li>

                    <li class="nav__item">
                        <a href="/categorias" class="nav__link">Agregar categorias</a>
                    </li>

                    @auth
                    <li class="nav__item">
                        <a>Hola! {{Auth::user()->nombre}}</a>
                                <!-- <ul class="nav">
                                    <li class="li">
                                        <a href="{{route('logout')}}" class="a">Cerrar Sesión</a>
                                    </li>
                                </ul> -->
                    </li>
                    @endauth
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>

                <img src="/assets/sombras/sombra_1.png" alt="" class="nav__img-1">
                <img src="/assets/sombras/sombra_2.png" alt="" class="nav__img-2">
            </div>

            <div class="nav__buttons">
                <i class="fa-solid fa-moon" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </div>
        </nav>
    </header>

    <form method="post" action="{{ url('/administracion/'.$producto->id) }}" class="form_p">
        @csrf

        {{ method_field('PATCH')}}
        <h2>Agregar Producto</h2>
        <input type="text" name="nombre" placeholder="Nombre del producto" value="{{$producto->nombre}}">

        <textarea name="descripcion_breve" placeholder="Descripción breve del producto">{{$producto->descripcion_breve}}</textarea>

        <textarea name="descripcion_larga" placeholder="Ingrese la descripción del producto">{{$producto->descripcion_larga}}</textarea>

        <textarea name="detalles" placeholder="Ingrese los detalles del producto">{{$producto->detalles}}</textarea>

        <input type="text" name="image" placeholder="Ingrese ruta de la imagen" value="{{$producto->image}}">

        <input type="number" step="0.01" name="costo" placeholder="Precio del producto" value="{{$producto->costo}}">

        <input type="number" name="stock" placeholder="Stock del producto" value="{{$producto->stock}}">

        <input type="text" name="categoria" placeholder="Categoría del producto" value="{{$producto->categoria}}">

        <input type="number" name="id_categoria" placeholder="Id de la categoría" value="{{$producto->id_categoria}}">

        <div class="button">
        <button>
            <span class="shadow"></span>
            <span class="edge"></span>
            <span class="front text"> Guardar
            </span>
        </button>
        </div>
    </form>
</body>
