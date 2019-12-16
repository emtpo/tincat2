<?php require "head.php"; ?>

<body>
    <div class="form-container">
        <h1>TINCAT</h1>
        <form action="functions/setUser.php" method="post">

        <!-- <a href="_login.php?prenom=thomas&lastname=root">cliquez ici</a> -->
           <input type="email" name="emailUser" placeholder="email">
           <input type="text" placeholder="pseudo" name="pseudo">
           <input type="password" placeholder="password" name="password">
           <input type="password" placeholder="confirm password" name="confirm-password">
           <input type="submit" value="register">
        </form>
    </div>
    
    <?php
        /******* Afficher message d'erreur si il existe ******/
        //var_dump($_GET);
        if(isset($_GET["errorMessage"])){
            echo "<div id=\"error\">";
            echo $_GET["errorMessage"];
            echo "</div>";
        }
    ?>

</body>
</html>