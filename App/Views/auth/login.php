<?php
$title = "Connexion";
?>

<div class="wrap2">
    <h2>Se connecter</h2>

    <form action="index.php?page=login" method="post">
        <fieldset>
            <legend><i class="fas fa-user-lock"></i> Informations d'authentification</legend>
            <div class="champ">
                <label for="Email">Email</label>
                <input type="email" name="Email" id="Email" value="<?php if(isset($_POST['Email'])){echo $_POST['Email'];} ?>">
                <?php if (isset($error['Email'])) : ?>
                    <p style="color:red"> <?= $error['Email']; ?></p>
                <?php endif; ?>
            </div>
            <div class="champ">
                <label for="Password">Mot de passe</label>
                <input type="password" name="Password" id="Password" value="<?php if(isset($_POST['Password'])){echo $_POST['Password'];} ?>">
                <?php if (isset($error['Password'])) : ?>
                    <p style="color:red"> <?= $error['Password']; ?></p>
                <?php endif; ?>
            </div>
        </fieldset>
    
        <div class="submit champ">
            <input class="button button-primary" type="submit" name="submitted" value="Se connecter">
        </div>
    </form>
</div>