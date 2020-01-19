<?php
    // 1: connection à la bdd
    require("database.php");

    // 2: vérifier les élèments utiles
    var_dump($_POST["user_id"]);
    var_dump($_POST["pseudo"]);

    // 3: relier l'élèment à sa variable
    $id = $_POST["user_id"];
    $pseudo = $_POST["pseudo"];

    // 3: requête avec UPDATE
    $req = $db->prepare("UPDATE users SET pseudo=? WHERE id=?");
    $req->execute([$pseudo, $id]);

    // 4: Message d'update
    $messageUpdateProfil = "Profil update";
    header("Location: ../profils.php?messageUpdate=$messageUpdateProfil");

