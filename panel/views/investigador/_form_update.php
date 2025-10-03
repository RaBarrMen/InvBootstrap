<h1>Nuevo investigador</h1>
<form method="POST" action="investigador.php?action=update&id=<?php echo $id; ?>">
    <div class="mb-3">
        <label for="investigador" class="form-label">Nombre del investigador</label>
        <input type="text" class="form-control" id="investigador" name="investigador" value="<?php echo $data['investigador']; ?>" placeholder="Escribe el nombre del investigador" required>
    </div>    
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
</form>