<?php
// session_start();

include "config/commandes.php";

// if(isset($_SESSION['userxXJppk45hPGu']))
// {
//     if(!empty($_SESSION['userxXJppk45hPGu']))
//     {
//         header("Location: client/");
//     }
// }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login - MoBiGo</title>
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
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="pseudo" name="pseudo" class="form-control" style="width: 350%;">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" style="width: 350%;">
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe</label>
                        <input type="password" name="motdepasse" class="form-control" style="width: 350%;">
                    </div>
                    <br>
                    <input type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
                </form>

            </div>
        </div>
    </div>

</body>

</html>

<?php

if (isset($_POST['envoyer'])) {
    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $motdepasse = trim($_POST['motdepasse']);

    if (!empty($pseudo) && !empty($email) && !empty($motdepasse)) {
        ajouterUser($pseudo, $email, $motdepasse);
        header('Location: index.php');
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

?>