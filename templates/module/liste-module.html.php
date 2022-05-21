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
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom Module</th>
                <th scope="col">Responsable</th>
              </tr> 
            </thead>
            <tbody>
              <?php foreach ($modules as $module): ?>
                <tr>
                    <td><?= $module->nom_module ?></td>
                    <td><?= $module->rpd_id ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>