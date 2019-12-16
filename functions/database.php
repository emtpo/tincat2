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
if (!empty($_POST["pseudo"]) && !empty($_POST["password"]) ){
    $req = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo AND password = :password");
    $req->blindParam(":pseudo", $_POST["pseudo"]);
    $req->blindParam(":password", $_POST["password"]);
    
}