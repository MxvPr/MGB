<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: loginUser.php");
}

if (empty($_SESSION['user'])) {
    header("Location: loginUser.php");
}

require("config/commandes.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <div style="margin-right: 500px">
        <h5 style="color: #545659; opacity: 0.5;">Connecté en tant qu'utilisateur</h5>
    </div>
    <div>
        <a class="btn btn-danger d-flex" style="display: flex; justify-content: flex-end;" href="admin/destroy.php">Se deconnecter</a>
    </div>
</head>

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
                        <li><a href="/panier/panier.html" class="text-white">Panier</a></li>
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

<body>

</body>

</html>