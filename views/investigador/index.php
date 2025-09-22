<div class="container my-5">
    <h2 class="mb-4 text-center">Miembros investigadores de la red</h2>
    <div class="row justify-content-center">
        <?php foreach($investigadores as $inv): ?>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <!-- Foto del investigador -->
                    <img src="images/<?= $inv['fotografia']; ?>" 
                         class="card-img-top" 
                         alt="<?= $inv['nombre']; ?>" 
                         style="object-fit: cover; height: 250px;">
                    
                    <div class="card-body">
                        <!-- Nombre completo -->
                        <h5 class="card-title text-primary">
                            <?= $inv['nombre']." ".$inv['primer_apellido']." ".$inv['segundo_apellido']; ?>
                        </h5>
                        
                        <!-- Semblanza -->
                        <p class="card-text">
                            <?= $inv['semblanza']; ?>
                        </p>
                    </div>
                    
                    <!-- Footer con la institución -->
                    <div class="card-footer text-muted small d-flex align-items-center">
                        <img src="images/<?= $inv['logotipo']; ?>" 
                             alt="<?= $inv['institucion']; ?>" 
                             style="height: 25px; margin-right: 8px;">
                        <?= $inv['institucion']; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
