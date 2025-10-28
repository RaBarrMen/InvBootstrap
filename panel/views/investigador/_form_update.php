<h1>Modificar Investigador</h1>
<form method="POST" action="investigador.php?action=update&id=<?php echo $id; ?>">
    <div class="mb-3">
        <label for="primer_apellido" class="form-label">Primer Apellido</label>
        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="<?php echo $data['primer_apellido']; ?>"  placeholder="Escribe aqui el primer apellido" required>
    </div>
    <div class="mb-3">
        <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="<?php echo $data['segundo_apellido']; ?>"  placeholder="Escribe aqui el segundo apellido" required>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data['nombre']; ?>"  placeholder="Escribe aqui el nombre" required>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Correo Electronico</label>
        <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $data['correo']; ?>"  placeholder="Escribe aqui el correo" required>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Contraseña</label>
        <input type="text" class="form-control" id="contrasenia" name="contrasenia" value="<?php echo $data['contrasenia']; ?>"  placeholder="Escribe aqui la contrasenia" required>
    </div>
    <div class="mb-3">
        <label for="fotografia" class="form-label">Fotografia</label>
        <input type="text" class="form-control" id="fotografia" name="fotografia" value="<?php echo $data['fotografia']; ?>"  placeholder="Escribe aqui el nombre de su fotografia" required>
    </div>
    <div class="mb-3">
        <label for="semblanza" class="form-label">Semblanza</label>
        <input type="text" class="form-control" id="semblanza" name="semblanza" value="<?php echo $data['semblanza']; ?>"  placeholder="Escribe aqui la sembranza" required>
    </div>
    <div class="mb-3">
        <label for="institucion" class="form-label">Institución</label>
        <select class="form-select" id="id_institucion" name="id_institucion" required="required">
        <?php foreach($instituciones as $institucion): 
            $selected = "";
            if($data['id_institucion'] == $institucion['id_institucion']){
                $selected = "selected";
            }
        ?>
        <option <?php echo $selected; ?> value="<?php echo $institucion['id_institucion']; ?>"><?php echo $institucion['institucion']; ?></option>
        <?php endforeach; ?>
        </select>
    </div> 
    
    <div class="mb-3">
    <label for="id_tratamiento" class="form-label">Tratamiento</label>
    <select class="form-select" id="id_tratamiento" name="id_tratamiento" required="required">
        <?php foreach($tratamientos as $tratamiento): 
            $selected = "";
            if($data['id_tratamiento'] == $tratamiento['id_tratamiento']){
                $selected = "selected";
            }
        ?>
        <option <?php echo $selected; ?> value="<?php echo $tratamiento['id_tratamiento']; ?>">
            <?php echo $tratamiento['tratamiento']; ?>
        </option>
        <?php endforeach; ?>
    </select>
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
   
   

</form>