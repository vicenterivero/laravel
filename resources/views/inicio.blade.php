<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--     <style>
        body {
            background: #000;
        }

        .contenido {
            margin: 10px -10px;
        }
    </style> -->
</head>

<body class="body">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/inicio">VARB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/inicio">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/nosotros">Nosotros</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        Servicios
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/diseño">Nuestros trabajos</a></li>
                                        <li><a class="dropdown-item" href="/precios">Precios</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="/ofertas">Ofertas</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contacto">Contacto</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>
                </nav>


            </div>
        </div>
    </div>
    <div class="container ">


    <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn.pixabay.com/photo/2017/02/23/19/50/child-2093023_960_720.jpg" width="" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Que vuele tu imaginación</h5>
                        <p>Los limites los pones tú, sigue adelante.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2018/01/28/13/24/portrait-3113651_960_720.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Comparte y trabaja en equipo</h5>
                        <p>Solo eres fuerte, pero en equipo invensible.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2014/06/24/17/38/smoke-376543_960_720.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>La vida es un instante, disfrutala</h5>
                        <p>Realiza tus proyectos y no los dejes escapar.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>
    <div class="row texto1">
<h1>Creación de páginas web</h1>
<p> Somos una Agencia de Diseño de Páginas Web en Cancún con más de 10 años de experiencia desarrollando sitios web de cara al posicionamiento orgánico en buscadores como Google.</p>
<div class="w-10">
  <button type="button" class="btn btn-success">Solitar cotización</button>
</div>

    </div>
    <div class="row texto">
<h1>¿Qué incluye mi página web</h1>
<p> Todos los proyectos son personalizados y cada uno demanda diferentes necesidades, desde el diseño más básico incluye todo lo que se describe a continuación:</p>
<ul class="centrado">
    <li>Diseño Personalizado</li>
    <li>Dominio: tuempresa.com</li>
    <li>Hospedaje incluido</li>
    <li>Seguridad: Certificado SSL</li>
    <li>Hasta 25 cuentas de correo</li>
    <li>Enlace a Redes Sociales</li>
    <li>Chat directo a tu WhatsApp</li>
</ul>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
