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

<body>

</body>

</html>