<h1>Nuevo Investigador</h1>
<form method="POST" action="investigador.php?action=create" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="primer_apellido" class="form-label">Primer Apellido</label>
        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Escribe el primer apellido" required>
    </div>

    <div class="mb-3">
        <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Escribe el segundo apellido">
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre(s)</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe el nombre" required>
    </div>

    <div class="mb-3">
        <label for="fotografia" class="form-label">fotografia</label>
        <input type="text" class="form-control" id="fotografia" name="fotografia" placeholder="fotografia.png" required>
    </div>

    <div class="mb-3">
        <label for="semblanza" class="form-label">Semblanza</label>
        <textarea class="form-control" id="semblanza" name="semblanza" rows="3" placeholder="Escribe una semblanza"></textarea>
    </div>

    <div class="mb-3">
        <label for="institucion" class="form-label">Institución</label>
        <input type="text" class="form-control" id="institucion" name="institucion" placeholder="Ejemplo: Instituto Tecnológico de Celaya" required>
    </div>

    <div class="mb-3">
        <label for="tratamiento" class="form-label">Tratamiento</label>
        <input type="text" class="form-control" id="tratamiento" name="tratamiento" placeholder="Ejemplo: Ingeniero, Doctor" required>
    </div>

    <div>
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">     
    </div>
</form>
