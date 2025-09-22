<?php 
include_once("./views/header.php");
?>     
    <div class="container py-5">
        <h2 class="text-center mb-4">Contacto</h2>

        <div class="card shadow-sm">
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" placeholder="ejemplo@correo.com"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo de comentario</label>
                        <select class="form-select" id="tipo" required>
                            <option value="">Selecciona una opción</option>
                            <option value="comentario">Comentario</option>
                            <option value="queja">Queja</option>
                            <option value="inscripcion">Inscripción</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."
                            required></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-4 text-center">
            <div class="card-body">
                <h5 class="card-title">Información de contacto</h5>
                <p class="card-text mb-1"><strong>Teléfono:</strong> +52 461 123 4567</p>
                <p class="card-text"><strong>Correo:</strong> contacto@redinvestigacion.com</p>
            </div>
        </div>
    </div>
    <?php 
include_once("./views/footer.php");
?> 