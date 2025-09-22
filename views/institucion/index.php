<main>
  <div class="container text-center my-4">
    <div class="row justify-content-center">
      <?php foreach($instituciones as $institucion): ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100" style="width: 18rem;">
            <img 
              src="images/institucion/<?= $institucion['logotipo']; ?>" 
              class="card-img-top" 
              alt="<?= $institucion['institucion']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $institucion['institucion']; ?></h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>
