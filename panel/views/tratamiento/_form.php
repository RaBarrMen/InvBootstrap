<h1>Nuevo tratamiento</h1>
<form method="POST" action="tratamiento.php?action=create" >
    <div class="mb-3">
        <label for="Tratamiento" class="form-label">Nombre de la tratamiento</label>
        <input type="text" class="form-control" id="tratamiento" name="tratamiento" placeholder="Escribe el nombre del tratamiento" required>
    </div>
    <div>
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar" required>     
    </div>
</form>