<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyectos - Red de Investigación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/social.css">

    <style>
        .banner {
            background: url("https://picsum.photos/1600/400?random=70") center/cover no-repeat;
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
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

    <header class="banner">
        <h1>Proyectos de Investigación</h1>
    </header>

    <main class="container py-5">

        <h2 class="text-center mb-4">Explora nuestros proyectos</h2>
        <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="pills-activos-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-activos" type="button">Activos</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-finalizados-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-finalizados" type="button">Finalizados</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-propuesta-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-propuesta" type="button">En Propuesta</button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-activos">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">IA para Diagnóstico Médico</h5>
                                <p class="card-text">Uso de redes neuronales para la detección temprana de enfermedades.
                                </p>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" style="width: 70%">70%</div>
                                </div>
                                <a href="#" class="btn btn-primary btn-sm">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Redes Seguras con Blockchain</h5>
                                <p class="card-text">Proyecto de ciberseguridad para proteger datos en entornos
                                    distribuidos.</p>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-warning" style="width: 50%">50%</div>
                                </div>
                                <a href="#" class="btn btn-primary btn-sm">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Energía Solar Inteligente</h5>
                                <p class="card-text">Optimización del consumo energético en comunidades rurales.</p>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-info" style="width: 40%">40%</div>
                                </div>
                                <a href="#" class="btn btn-primary btn-sm">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-finalizados">
                <div class="accordion" id="finalizadosAcc">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#proj1">
                                Sistema de Reconocimiento Facial
                            </button>
                        </h2>
                        <div id="proj1" class="accordion-collapse collapse show" data-bs-parent="#finalizadosAcc">
                            <div class="accordion-body">
                                Proyecto concluido en 2023. Implementado en sistemas de seguridad académicos.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#proj2">
                                Monitoreo Ambiental con IoT
                            </button>
                        </h2>
                        <div id="proj2" class="accordion-collapse collapse" data-bs-parent="#finalizadosAcc">
                            <div class="accordion-body">
                                Se instalaron sensores para medir calidad del aire y del agua en zonas urbanas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-propuesta">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="alert alert-secondary" role="alert">
                            <i class="bi bi-lightbulb"></i> Propuesta: Creación de un laboratorio de <strong>IA aplicada
                                a la educación</strong>.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-secondary" role="alert">
                            <i class="bi bi-lightbulb"></i> Propuesta: Desarrollo de <strong>plataformas de análisis de
                                datos urbanos</strong>.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-success d-flex align-items-center gap-2 mt-5" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <div>
                Los proyectos de investigación son el motor de la innovación. ¡Súmate y colabora en nuestras
                iniciativas!
            </div>
        </div>

    </main>
    <footer>
        <div class="row" id="footer-1">
            <div class="col-1"></div>
            <div class="col-4"></div>
            <div class="col-2"></div>
            <div class="col-4"></div>
            <div class="col-1"></div>
        </div>
        <div class="row" id="footer-2">
            <div class="col-1"></div>
            <div class="col-3"></div>
            <div class="col-4"></div>
            <div class="col-3"></div>
            <div class="col-1"></div>
        </div>
        <div class="row" id="footer-3">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <ul class="footer-social">
                    <li>
                        <a class="facebook" href="https://www.facebook.com">
                            <span></span><span></span><span></span><span></span>
                            <i class="fa fa-facebook" aria-hidden="true"><img src="images/facebook_109862.png"
                                    height="50" alt=""></i>
                        </a>

                    </li>
                    <li>
                        <a class="twitter" href="https://www.instagram.com">
                            <span></span><span></span><span></span><span></span>
                            <i class="fa fa-twitter" aria-hidden="true"><img src="images/instagam_109863.png"
                                    height="50" alt=""></i>
                        </a>
                    </li>
                    <li>
                        <a class="instagram" href="www.whatsapp.com">
                            <span></span><span></span><span></span><span></span>
                            <i class="fa fa-instagram" aria-hidden="true"><img src="images/whatsapp_109861.png"
                                    height="50" alt=""></i>
                        </a>
                    </li>
                    <li>
                        <a class="google" href="https://www.youtube.com">
                            <span></span><span></span><span></span><span></span>
                            <i class="fa fa-google-plus" aria-hidden="true"><img src="images/youtube_109860.png"
                                    height="50" alt=""></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>