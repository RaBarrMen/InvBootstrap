<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miembros de la Red de Investigación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/social.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .table th {
            background-color: #20c997;
            color: white;
            text-align: center;
        }

        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .foto-perfil {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid #20c997;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <header class="d-flex align-items-center justify-content-center my-3"
        style="background-color: blue; padding: 24px;">
        <img src="images/red.png" alt="Logo Red de Investigación" class="me-3"
            style="width:80px; height:auto; object-fit:contain; border-radius: 50%;">
        <h1 class="">Red de Investigación IA</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="miembros.php">Investigadores</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="instituciones.php">Instituciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="congresos.php">Congresos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Investigaciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="investigacion1.php">Investigacion 1</a></li>
                            <li><a class="dropdown-item" href="investigacion2.php">Investigacion 2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>