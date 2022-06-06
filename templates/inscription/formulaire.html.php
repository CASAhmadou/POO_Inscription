<?php 
use App\Core\Constantes;

?>
<div class="row">
<form class="col-6" method="POST" action="inscription" >
  <div class="col-md-6">
    <label for="inputname" class="form-label">Nom Complet</label>
    <input type="text" class="form-control" id="inputname">
  </div>
  <div class="col-md-6">
    <label for="inputAdresse" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="inputAdresse">
  </div>
  
  <div class="col-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Sexe</label>
    <select id="inputState" class="form-select">
      <option selected>Masculin</option>
      <option>Féminin</option>
    </select>
  </div>
  <div class="mt-2">
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>
<img class="img-fluid col-6"src="<?=Constantes::WEB_ROOT.'images/students.png'?>" alt="">
</div>