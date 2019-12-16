<?php require "head.php"; ?>

<body>
    <div class="form-container">
        <h1>TINCAT</h1>
        <form action="functions/setUser.php" method="post">

        <!-- <a href="_login.php?prenom=thomas&lastname=root">cliquez ici</a> -->
           <input type="email" name="email" placeholder="email">
           <input type="text" placeholder="pseudo" name="pseudo">
           <input type="password" placeholder="password" name="password">
           <input type="password" placeholder="confirm password" name="confirmPassword">
           <input type="submit" value="register">
        </form>
    </div>

    <div class="message">
        <?php
        if( isset ($_Get["message"])){
            echo $_GET["message"];
        } ?>
    </div>
    
</body>
</html>