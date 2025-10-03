<h1>Nueva institución</h1>
<form method="POST" action="institucion.php?action=create" >
    <div class="mb-3">
        <label for="Institución" class="form-label">Nombre de la institucion</label>
        <input type="text" class="form-control" id="institucion" name="institucion" placeholder="Escribe el nombre de la institucion" required>
    </div>
    <div class="mb-3">
        <label for="Logotipo" class="form-label">Logotipo</label>
        <input type="text" class="form-control" id="logotipo" name="logotipo" placeholder="logo.png" required>
    </div>
    <div>
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar" required>     
    </div>
</form>