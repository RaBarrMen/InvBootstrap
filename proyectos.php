

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
<?php 
include_once("./views/footer.php");
?> 