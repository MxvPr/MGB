<?php

require("config/commandes.php");

$Produits = afficher();

?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Accueil</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


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
              <li><a href="login.php" class="text-white">Utilisateur</a></li>
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

  <main>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php foreach ($Produits as $produit) : ?>
            <div class="col">
              <div class="card shadow-sm">
                <h3><?= $produit->nom ?></h3>
                <img src="<?= $produit->image ?>" style="width: 24%">

                <div class="card-body">
                  <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class="btn btn-sm btn-success">Voir plus</button></a>
                    </div>
                    <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>


        </div>
      </div>
    </div>

  </main>

</body>

</html>