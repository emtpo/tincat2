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
        $req = $db->prepare("SELECT pseudo FROM users WHERE pseudo <> :pseudo");
        $req->bindParam(":pseudo", $_SESSION["pseudo"]);
        // 3: execute
        $req->execute();
        // 4: boucle
        while($result = $req->fetch(PDO::FETCH_ASSOC)){
            // var_dump($result["pseudo"]);
            if( $_SESSION["pseudo"] != $result["pseudo"] ){
                echo "<h2>" . $result["pseudo"] . "</h2>";
            }  
        }
    ?>
</div>


<!-- On récupère tout la data users -->
<?php
    // $reponse = $bdd->query('SELECT * FROM users');

// On affiche chaque entrée une à une
    //while ($donnees = $reponse->fetch())
     //{
     //   ?><p>
    <!-- //   <strong>Utilisateurs :</strong> :  <?php // echo $donnees['pseudo']; ?><br />
      //  <?php
   // }
   // $reponse->closeCursor(); // Termine le traitement de la requête
    


//  echo "Bonjour " . $_SESSION["pseudo"];

