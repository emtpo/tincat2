<?php echo "Delete user script";

        // 1 : connect to database
        require("database.php");

        // 2: prepare (delete sql)
        $req = $db->prepare("DELETE FROM users WHERE id = :id");
        $req->bindParam(":id", $_GET["user_id"]);

        // 3: execute
        $req->execute();
        
        // 4: rediriger vers profils.php
        $message = "Pseudo delete";
        header("Location: ../profils.php?message=$message");
?>
