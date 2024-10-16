<!doctype html>
<html lang="en">
    <head>
        <title>Hotel PRUEBA</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        @include('css-components.style')
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body mb-0 pb-0" data-bs-theme="dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav m-2 shadow flex-grow-1">
                            <a class="nav-link me-3" aria-current="page" href="#">Hotel Prueba</a>
                            <a class="nav-link me-3" aria-current="page" href="#">Inicio</a>
                            <a class="nav-link me-3" aria-current="page" href="#">Habitaciones</a>
                            <a class="nav-link me-3" aria-current="page" href="#">Reservaciones</a>
                        </div>
                        <!-- Contenedor separado para el botón alineado a la derecha -->
                        <div class="navbar-nav m-2 mb-0">
                            <a class="nav-link btn btn-primary ms-auto active" aria-current="page" href="#">Reserva ya</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        
        <main>
                <section>
                    <div class=" masthead" style="background-image: url('{{ asset('resources/images/main1.jpg') }}');">
                        <div class="color-overlay d-flex justify-content-center align-items-center ">
                           <div class=" text-center text-md-start p-5 mainheadh1">
                            <h1 >
                                <div class="display-2">Hotel Prueba</div>
                                <div class="display-5 text-muted">Reserva tus habitaciones ya</div>
                            </h1>

                            <a href="{{route('habitaciones.create')}}" class="btn btn-outline-primary btn-lg">Crear nueva habitacion</a>

                           </div>
                        </div>
                </section>





        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
