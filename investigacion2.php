<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Investigación: Inteligencia Artificial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/social.css">

    <style>
        .carousel-img {
            height: 420px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <header class="d-flex align-items-center justify-content-center my-3"
        style="background-color: blue; padding: 24px;">
        <img src="images/red.png" alt="Logo Red de Investigación" class="me-3"
            style="width:80px; height:auto; object-fit:contain; border-radius: 50%;">
        <h1 class="text-white">Red de Investigación IA</h1>
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
                            <li><a class="dropdown-item" href="investigacion1.php">Riesgos de la IA</a></li>
                            <li><a class="dropdown-item" href="investigacion2.php">Inteligencia Artificial</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <div class="d-flex align-items-center mb-3">
            <h1 class="me-3 mb-0">Inteligencia Artificial</h1>
            <span class="badge text-bg-success">IA & Tecnología</span>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div id="carouselIA" class="carousel slide shadow-sm rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIA" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#carouselIA" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#carouselIA" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1200/600?random=21" class="d-block w-100 carousel-img"
                                alt="IA definición">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Definición</h5>
                                <p>Máquinas que aprenden, razonan y actúan como humanos.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1200/600?random=22" class="d-block w-100 carousel-img"
                                alt="Modelos IA">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Modelos de Aprendizaje</h5>
                                <p>Supervisado, no supervisado, semisupervisado y por refuerzo.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1200/600?random=23" class="d-block w-100 carousel-img"
                                alt="Redes neuronales">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Redes Neuronales</h5>
                                <p>FF, CNN, RNN, LSTM y GAN.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIA"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselIA"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Ficha de la investigación</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Autor <span class="badge text-bg-secondary">Equipo IA</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Estado <span class="badge text-bg-success">Publicado</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Versión <span class="badge text-bg-light text-dark">1.0</span>
                            </li>
                        </ul>
                        <p class="mt-3 mb-0 small text-muted">
                            Investigación introductoria sobre la definición, funcionamiento, tipos y beneficios de la
                            Inteligencia
                            Artificial.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs mt-4" id="tabsIA" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="tab-definicion" data-bs-toggle="tab"
                    data-bs-target="#pane-definicion" type="button">Definición</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="tab-funcionamiento" data-bs-toggle="tab"
                    data-bs-target="#pane-funcionamiento" type="button">Funcionamiento</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="tab-tipos" data-bs-toggle="tab" data-bs-target="#pane-tipos"
                    type="button">Tipos</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="tab-modelos" data-bs-toggle="tab" data-bs-target="#pane-modelos"
                    type="button">Modelos</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="tab-beneficios" data-bs-toggle="tab" data-bs-target="#pane-beneficios"
                    type="button">Beneficios</button>
            </li>
        </ul>

        <div class="tab-content pt-3">
            <div class="tab-pane fade show active" id="pane-definicion">
                <p>La <strong>Inteligencia Artificial (IA)</strong> es un campo que busca crear máquinas capaces de
                    razonar,
                    aprender y actuar como lo haría un ser humano.</p>
            </div>
            <div class="tab-pane fade" id="pane-funcionamiento">
                <p>La IA se basa en datos y algoritmos que identifican patrones. Incluye técnicas de
                    <span class="badge text-bg-primary">aprendizaje automático</span> y <span
                        class="badge text-bg-primary">aprendizaje profundo</span>.
                </p>
            </div>
            <div class="tab-pane fade" id="pane-tipos">
                <ul>
                    <li>Máquinas reactivas</li>
                    <li>Memoria limitada</li>
                    <li>Teoría de la mente</li>
                    <li>Autoconocimiento (hipotético)</li>
                    <li>IA Estrecha (ANI), IA General (AGI) y Superinteligencia (ASI)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pane-modelos">
                <ul>
                    <li>Supervisado</li>
                    <li>No supervisado</li>
                    <li>Semisupervisado</li>
                    <li>Por refuerzo</li>
                </ul>
                <p><strong>Redes neuronales:</strong> FF, CNN, RNN, LSTM y GAN.</p>
            </div>
            <div class="tab-pane fade" id="pane-beneficios">
                <ul>
                    <li>Automatización de procesos</li>
                    <li>Reducción de errores</li>
                    <li>Rapidez en análisis de datos</li>
                    <li>Disponibilidad continua (24/7)</li>
                    <li>Apoyo en investigación científica</li>
                </ul>
            </div>
        </div>

        <div class="alert alert-info d-flex align-items-center gap-2 mt-4" role="alert">
            <i class="bi bi-lightbulb-fill"></i>
            <div>
                La IA es una herramienta poderosa que, bien aplicada, puede transformar la sociedad con innovación y
                progreso.
            </div>
        </div>

        <div class="text-end">
            <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-up"></i> Arriba</a>
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