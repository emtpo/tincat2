<?php
    require("head.php");

    // Si session pseudo vide
    if(empty($_SESSION) ){
            header("Location: login.php");
    }
?>

<a href="functions/disconnect.php">Disconnect</a>

<!-- Afficher les utilisateurs stocké dans la BDD sauf moi -->

<!-- On récupère tout la data users -->
<?php
$reponse = $bdd->query('SELECT * FROM users');

// On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
        ?><p>
        <strong>Utilisateurs :</strong> : <?php echo $donnees['pseudo']; ?><br />
        <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

<?php
echo "Bonjour " . $_SESSION["pseudo"];

