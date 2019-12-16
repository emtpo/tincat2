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
    // Vérifier si le pseudo ou le mot de passe est vide
    // Ajouter un input confirm password et vérifier si les deux sont égaux
    // Ajouter un champ email

// SI email égal test@test.com et password égal admin
if($_GET["emailUser"] == "test@test.com" && $_GET["password"] == "admin" && $_GET["password"] == "confirm-password" ){
    echo "Hello " . $_GET["emailUser"];

}else if( empty($_GET["password"]) ){
   /******* Si password vide: tansmettre un message d'erreur, Header Location ....... ******/
   header("Location: localhost/tincat/register.php?errorMessage=Empty password");
}else{
   header("Location: localhost/tincat/register.php?errorMessage=Erreur de connexion");
}
  
// Etape 3 : prepare request
$req = $db->prepare("INSERT INTO users (pseudo, password) VALUES(:pseudo, :password)");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $_POST["password"]);
$req->execute();