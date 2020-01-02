<section id="login" class="container__Flex">
    <div id="zone__Login">
        <h3>Connectez-vous</h3>
        <div class="container__Flex wrap">
            <div class="flex__6">
                <img src="images/avatars/avatar.png" alt="image de login">
            </div>
            <div class="flex__6">
                <form action="actions/connexion.php" method="post" class="form__Login">
                    <input type="text" id="username" name="username" placeholder="Login">
                    <input type="password" id="pass" name="password" minlength="8" placeholder="Mot de passe" required>
                    <input type="submit" value="Connexion">
                </form>
            </div>
        </div>
    </div>
</section>
