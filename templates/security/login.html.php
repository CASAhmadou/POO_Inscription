<?php
  session_start();
  $login=$_POST["login"];
  
  $password=$_POST["password"];
  $submit=["submit"];
  $erreur="";
  if(isset($submit)){
    include('DataBase.php');
    $cle=$this->pdo->prepare("select * from personne where login=? and password=? limit 1");
    $cle->execute(array($login,$password));
    $tab=$cle->fetchAll();
    if(count($tab)>0){
      $_SESSION["nomComplet"]=ucfirst(strtolower($tab[0]["nom_complet"]));
      $_SESSION["authentification"]="oui";
      header("location:login.html.php");
      //dd($_SESSION);
    }else{
      $erreur="Dugalo lu bakh";
    }
  }
?>

<div class="container-fluid mt-5">

  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Formulaire de Connexion</h4>
      <p class="card-text ml-3">
        <form name="form" method="post" action="">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </p>
    </div>
  </div>
</div>