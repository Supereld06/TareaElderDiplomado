<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proyecto Ventas Econdorcet</title>

    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.7/dist/darkly/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-warning">
        <div class="container">
            <span class="navbar-brand text-dark fw-bold">
                Sistema de Ventas Econdorcet
            </span>
        </div>
    </nav>

    <div class="container mt-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('contenido')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>