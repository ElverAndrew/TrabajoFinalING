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

    <form method="post" action="{{ url('/administracion') }}" class="form_p">
        @csrf
        <h2>Agregar Producto</h2>
        <input type="text" name="nombre" placeholder="Nombre del producto">

        <textarea name="descripcion_larga" placeholder="Ingrese la descripción del producto"></textarea>

        <textarea name="detalles" placeholder="Ingrese los detalles del producto"></textarea>

        <input type="text" name="image" placeholder="Ingrese ruta de la imagen">

        <input type="number" step="0.01" name="costo" placeholder="Precio del producto">

        <input type="number" name="stock" placeholder="Stock del producto">

        <input type="text" name="categoria" placeholder="Categoría del producto">

        <input type="number" name="id_categoria" placeholder="Id de la categoría">

        <div class="button">
        <button>
            <span class="shadow"></span>
            <span class="edge"></span>
            <span class="front text"> Guardar
            </span>
        </button>
        </div>
    </form>

    <div class="container_tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Detalles</th>
                    <th>Imagen</th>
                    <th>Costo</th>
                    <th>Stock</th>
                    <th>ID Categoría</th>
                    <th>Categoría</th>
                    <th>Botones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td data-label="Nombre">{{$producto->nombre}}</td>
                    <td data-label="Descripción">{{$producto->descripcion_larga}}</td>
                    <td data-label="Detalles">{{$producto->detalles}}</td>
                    <td data-label="Imagen">{{$producto->image}}</td>
                    <td data-label="Costo">{{$producto->costo}}</td>
                    <td data-label="Stock">{{$producto->stock}}</td>
                    <td data-label="ID Categoría">{{$producto->id_categoria}}</td>
                    <td data-label="Categoría">{{$producto->categoria}}</td>
                    <td>

                    <a href="{{url('/administracion/'.$producto->id.'/edit')}}">
                        Editar
                    </a>

                    <form method="post" action="{{ url('/administracion/'.$producto->id) }}">
                        @csrf
                        {{ method_field('DELETE') }}

                        <!-- <button id="button2" class="noselect" type="submit" onclick="return confirm('¿Quiéres borrar?')"><span class="text">Delete</span><span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                            </svg></span>
                        </button> -->

                        <button type="submit" onclick="return confirm('¿Quiéres borrar?')" value="Borrar">Borrar</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
