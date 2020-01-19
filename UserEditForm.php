<?php
require("head.php");
require("functions/database.php");

    //SI session pseudo est vide:
    if(empty($_SESSION["pseudo"])){
        //ALORS redirection vers la page login
        header("Location: login.php");
    }

    // Bonus SELECT
    $req = $db->prepare("SELECT pseudo FROM users WHERE id = :id");
    $req->bindParam(":id", $_GET["user_id"]);
    $req->execute();

    $result = $req->fetch(PDO::FETCH_ASSOC);

?>
<body>
    <div class="block">
        <div class="form-container">
            <h2>Change your profil</h2>
            <form action="functions/UserEdit.php" method="post">
                <input type="text" placeholder="Nouveau pseudo" name="pseudo" value="<?php echo $result['pseudo']; ?>">
                <input type="hidden" placeholder="id" name="user_id" value="<?php echo $_GET["user_id"]; ?>">
                <input type="submit" placeholder="Update" value="Update">
            </form>
        </div>
    </div>
</body>
