<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Emkt - prueba</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!--style-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

        <script src="https://kit.fontawesome.com/e780821dee.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">
                    <img src="{{ asset('images/logo-emkt-company.webp') }}" alt="Logo proyecto" width="225">
                </a>
                <button class="navbar-toggler border border-light text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon d-flex flex-column justify-content-center align-items-center">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <div class="position-relative">
                <!-- Cover para el carousel -->
                <div class="cover" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                    
                <div id="carouselExample" class="carousel slide position-relative" data-bs-ride="carousel" data-bs-interval="2500">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row row-cols-3">
                                <div class="col">
                                    <img src="{{ asset('images/imagen1.jpg') }}" class="d-block img-fluid" alt="Imagen 1">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('images/imagen2.jpg') }}" class="d-block img-fluid" alt="Imagen 2">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('images/imagen3.jpg') }}" class="d-block img-fluid" alt="Imagen 3">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                            </div>
                        </div>                    
                        <div class="carousel-item">
                            <div class="row row-cols-3">
                                <div class="col">
                                    <img src="{{ asset('images/imagen4.jpg') }}" class="d-block img-fluid" alt="Imagen 4">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('images/imagen5.jpg') }}" class="d-block img-fluid" alt="Imagen 5">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('images/imagen6.jpg') }}" class="d-block img-fluid" alt="Imagen 6">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row row-cols-3">
                                <div class="col">
                                    <img src="{{ asset('images/imagen7.jpg') }}" class="d-block img-fluid" alt="Imagen 7">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('images/imagen8.jpg') }}" class="d-block img-fluid" alt="Imagen 8">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('images/imagen9.jpg') }}" class="d-block img-fluid" alt="Imagen 9">
                                    <h3>Lorem picsum</h3>
                                    <p>some text</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Cuentanos más sobre ti!</h1>
                        <button type="button" class="btn-close bg-light border-0" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('somos-emkt.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required >
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control" name="edad" id="edad" value="{{ old('edad') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="habilidades">Habilidades:</label>
                                    <select name="habilidades" id="habilidades" class="form-control">
                                        <option value="">Seleccione una habilidad</option>
                                        <option value="php">PHP</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="laravel">Laravel</option>
                                        <option value="java">Java</option>
                                        <option value="js">JS</option>
                                        <option value="angular">Angular</option>
                                        <option value="node">Node</option>
                                        <option value="linux">Linux</option>
                                        <option value="servidores">Servidores</option>
                                    </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .cover {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1; /* Asegura que el cover esté por encima del carousel */
                cursor: pointer; /* Cambia el cursor al pasar sobre el cover */
            }
        </style>

        <footer class="w-100 bg-warning h-50">
            <div class="py-3 d-flex flex-row ">
                <a class="text-light d-flex flex-row align-items-center justify-content-center w-25 text-decoration-none" href="https://www.instagram.com/emkt_company" target="_blank">
                    <i class="fab fa-instagram fa-2x mr-2"></i>
                    <p class="m-0">emktcompany</p>
                </a>
                <a class="text-light d-flex flex-row align-items-center justify-content-center w-25 text-decoration-none" href="https://www.facebook.com/EMKTCompany/" target="_blank">
                    <i class="fa-brands fa-facebook fa-2x mr-2"></i>
                    <p class="m-0">emktcompany</p>
                </a>
                <a class="text-light d-flex flex-row align-items-center justify-content-center w-25 text-decoration-none" href="https://www.linkedin.com/company/emkt-company" target="_blank">
                    <i class="fa-brands fa-linkedin fa-2x mr-2"></i>
                    <p class="m-0">emktcompany</p>
                </a>
                <a class="text-light d-flex flex-row align-items-center justify-content-center w-25 text-decoration-none" href="mailto:info@e-mktcompany.com" target="_blank">
                    <i class="fa-regular fa-envelope fa-2x mr-2"></i>
                    <p class="m-0">info@e-mktcompany.com</p>
                </a>
            </div>
        </footer>
    </body>
</html>
