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
        <label for="nombre" class="form-label">Correo Electronico</label>
        <input type="text" class="form-control" id="correo" name="correo" placeholder="Escribe el correo" required>
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label">Contrasenia</label>
        <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Escribe la contrasenia" required>
    </div>

    <div class="mb-3">
        <label for="fotografia" class="form-label">fotografia</label>
        <input type="file" class="form-control" id="fotografia" name="fotografia" placeholder="fotografia.png" required>
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
        <label for="institucion" class="form-label">Institución</label>
        <select class = "form-select" id="id_institucion" name="id_institucion" required = "required">
            <?php foreach($instituciones as $institucion): ?>
            <option value = "<?php echo $institucion['id_institucion']; ?>"><?php echo $institucion['institucion'];?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="tratamiento" class="form-label">Tratamiento</label>    
        <select class = "form-select" id="id_tratamiento" name="id_tratamiento" required = "required">
            <?php foreach($tratamientos as $tratamiento): ?>
            <option value = "<?php echo $tratamiento['id_tratamiento']; ?>"><?php echo $tratamiento['tratamiento'];?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">     
    </div>
</form>
