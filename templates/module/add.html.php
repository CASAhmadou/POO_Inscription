<?php
    use App\Core\Constantes;
?>

<div class="container-fluid d-flex justify-content-center mt-5">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Ajouter Module</h4>
    <p class="card-text ml-3">
      <form name="form" method="POST" action="<?=Constantes::WEB_ROOT."add-professeur"?>">
          <div class="mb-3">
            <label for="nomComplet" class="form-label">Nom Complet</label>
            <input type="texte" name="nomComplet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="texte" name="grade" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </p>
  </div>
</div>
</div>