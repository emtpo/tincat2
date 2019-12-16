<?php
// Etape 1 : config database
$DB_HOST = "localhost";
$DB_NAME = "tincat";
$DB_USER = "root";
$DB_PASSWORD = "";
// Etape 2 : Connexion to database
try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
var_dump($_POST);
// Avant d'insérer en base de données faire les vérifications suivantes


// Vérifier si le mot de passe est vide
if(empty($_POST["password"])){

    //action 
    echo "<h1>Password empty</h1>";

    // Ajouter un input confirm password et vérifier si les deux sont égaux
}elseif($_POST["password"] != $_POST["confirm-password"]){
    echo "<h1>Password not correct</h1>";

    // vérifie si le champ email est vide
}elseif(empty($_POST["email"])){
    echo "<h1>Email empty</h1>";

    // vérifie si le champ pseudo est vide
}elseif(empty($_POST["pseudo"])){
    echo "<h1>Pseudo empty</h1>";
}else{
    echo "<h1>Confirmed inscription</h1>";


// Etape 3 : prepare request
$req = $db->prepare("INSERT INTO users (pseudo, password) VALUES(:pseudo, :password)");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $_POST["password"]);
$req->execute();