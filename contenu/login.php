<section id="login" class="container__Flex">
    <div id="zone__Login">
        <h3>Connectez-vous</h3>
        <div class="container__flex wrap">
            <div class="flex__6">
                <img src="" alt="image de login">
            </div>
            <div class="flex__6">
                <?php if($connexion == false){ ?>
                <form action="actions/connexion.php" method="post">
                    <input type="text" id="username" name="username" placeholder="Login">
                    <input type="password" id="pass" name="password" minlength="8" placeholder="Mot de passe" required>
                    <input type="submit" value="Connexion">
                </form>
                <?php }else{ ?>
                    <form action="actions/deconnexion.php" method="post">
                        <input type="submit" value="Déconnexion">
                    </form>
                <?php } ?>
            </div>
        </div>
        
    </div>
</section>