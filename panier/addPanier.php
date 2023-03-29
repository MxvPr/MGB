
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
</head>
<body>
<header>
        <div class="collapse bg-dark" id="navbarHeader">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">A propos</h4>
                <p class="text-muted">Bienvenu sur MoBiGo, le premier site d'e-commerce concernant vos achat de produits sportif !</p>
              </div>
              <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Se connecter</h4>
                <ul class="list-unstyled">
                  <li><a href="login.php" class="text-white">Admin</a></li>
                  <li><a href="loginUser.php" class="text-white">Utilisateur</a></li>
                  <li><a href="inscription.php" class="text-white">Inscription</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
              <strong>MoBiGo</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </header>
    
</body>
</html>

<?php

if(isset($_GET['pdt'])){
        if(empty($produit)){
            die('Le produit a bien été ajouté au panier  <a href="javascript:history.back()">Retour à l\'accueil</a>' );
        }
        echo $produit;
        $panier->add($produit->id);
}
?>
