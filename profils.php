<?php
    require("head.php");

    // Si session pseudo vide
    if(empty($_SESSION) ){
          header("Location: login.php");
     }
?>

<a href="functions/disconnect.php">Disconnect</a>

<!-- Afficher les utilisateurs stocké dans la BDD sauf moi -->
<div class="users">
    <?php

        // 1 : connect to database
        require("functions/database.php");
        // 2: prepare request (SELECT)
        $req = $db->prepare("SELECT id, pseudo FROM users WHERE pseudo <> :pseudo");
        $req->bindParam(":pseudo", $_SESSION["pseudo"]);
        // 3: execute
        $req->execute();
        // 4: boucle
        while($result = $req->fetch(PDO::FETCH_ASSOC)){ 
            ?>
                <div>
                    <strong><?= $result["pseudo"] ?></strong>
                    <a href="">Supprimer</a>
                </div>
           <?php             
        }
    ?>
</div>
