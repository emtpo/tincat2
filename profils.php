<?php
    require("head.php");

    // Si session pseudo vide
    if(empty($_SESSION) ){
            header("Location: login.php");
    }
        // rediriger vers login
?>

<a href="functions/disconnect.php">Disconnect</a>

<?php
echo "Bonjour " . $_SESSION["pseudo"];

