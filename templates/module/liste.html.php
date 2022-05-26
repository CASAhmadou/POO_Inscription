<?php
  use App\Model\Module;
  $mod = new Module();
  $modules = $mod->findAll();
?>

<div class="card ml-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">LISTE DES MODULES</h4>
        <p class="card-text">
        
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <i class="fa-solid fa-plus"></i>
            <button class="btn btn-primary me-md-2" type="button">Nouveau</button>
          </div>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom Module</th>
                <th scope="col">Actions</th>
              </tr> 
            </thead>
            <tbody>
              <?php foreach ($modules as $module): ?>
                <tr>
                    <td><?= $module->nom_module ?></td>
                    <td>
                      <button type="button" class="btn btn-outline-primary">
                        <i class="fa-solid fa-person-chalkboard"></i>
                      </button>
                      <button type="button" class="btn btn-outline-primary">
                        <i class="fa-solid fa-trash-can"></i>
                      </button>
                    </td>

                </tr>
              <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>