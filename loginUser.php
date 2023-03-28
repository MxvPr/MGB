<?php
session_start();

include "config/commandes.php";

if (isset($_SESSION['user'])) {
    if (!empty($_SESSION['user'])) {
        header("Location: commande.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatib9le" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login User - MoBiGo</title>
</head>

<body>
    <br>
    <br>
    <br>
    <br>

    <div class="container" style="display: flex; justify-content: start-end">
        <div class="row">
            <div class="col-md-10">

                <form method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Login</label>
                        <input type="email" name="email" class="form-control" style="width: 350%;">
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe</label>
                        <input type="password" name="motdepasse" class="form-control" style="width: 350%;">
                    </div>
                    <br>
                    <input type="submit" name="envoyer" class="btn btn-info" value="Se connecter">
                </form>

            </div>
        </div>
    </div>

</body>

</html>

<?php

require "../MGB/config/connexion.php";
if (!empty($_POST['email']) && !empty($_POST['motdepasse'])) {
    $login = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    $q = $access->prepare('SELECT * FROM utilisateur WHERE email = :email');
    $q->bindValue('email', $login);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);

    $user = getUsers($login, $motdepasse);


    if ($res) {
        $passwordHash = $res['motdepasse'];
        if (password_verify($motdepasse, $passwordHash)) {
            $_SESSION['user'] = $res;
            header('Location: index.php');
            echo "Connexion réussie !";
        } else {
            echo "Identifiants invalides";
        }
    } else {
        echo "Identifiants invalides";
    }
}
?>