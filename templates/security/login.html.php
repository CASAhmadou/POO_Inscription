<?php 

use App\Core\Constantes;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'css/style.user.css'?>">
        <title>Document</title>
    </head>
    <body> 
      <div class="container-fluid d-flex justify-content-center mt-5">
        
        <div class="cardflex-row d-inline-flex ">
          <img class="img-fluid col-3"src="<?=Constantes::WEB_ROOT.'images/manstudent.png'?>" alt="">
          
          <div class="card-body col-6 m-5">
            <h4 class="card-title">Formulaire de Connexion</h4>
            <p class="card-text">
              <form name="form" method="post" action="">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="login" class="form-control col-4" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" name="submit" style="width: 10rem" class="text-center btn btn-info m-5 py-3">Connecter</button>
                </form>
            </p>
          </div>
        
          <img class=" img-fluid col-3" src="<?=Constantes::WEB_ROOT.'images/girlstudent.png'?>" alt="">
        </div>
      </div>
    
      <h1 class="text-uppercase text-center">Sonatel Academy</h1>
      <h2 class="text-center">Coding for better life!</h2>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>