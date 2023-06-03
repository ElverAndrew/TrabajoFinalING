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

    <form method="post" action="{{ url('/categorias') }}" class="form_p">
        @csrf
        <h2>Agregar Categoría</h2>
        <input type="number" name="id" placeholder="Id de la categoría">

        <input type="text" name="categoria" placeholder="Nombre de la categoría">

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
                    <th>ID Categoría</th>
                    <th>Nombre de la categoría</th>
                    <th>Botones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td data-label="ID Categoría">{{$categoria->id}}</td>
                    <td data-label="Categoría">{{$categoria->categoria}}</td>
                    <td>

                    <a href="{{url('/categorias/'.$categoria->id.'/edit')}}">
                        Editar
                    </a>

                    <form method="post" action="{{ url('/categorias/'.$categoria->id) }}">
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
