<?php
$title = "Inscription";
?>
<h1>Inscription</h1>

<form action="index.php?page=registration" method="post">
    <fieldset>
        <legend>Identité et Coordonnées</legend>
        <div class="champ">
            <label>Nom: <input type="text" name="nom" id="nom"></label>
        </div>
        <div class="champ">
            <label>Prenom: <input type="text" name="prenom" id="prenom"></label>
        </div>
        <div class="champ">
            <label for="">Date de Naissance : <input type="date"></label>
        </div>
    </fieldset>
    <fieldset>
        <legend>informations d'authentification</legend>
        <div class="champ">
            <label>Votre email: <input type="text" name="email" id=""></label>
        </div>
        <div class="champ">
            <label>Votre mot de passe: <input type="password" name="password" id=""></label>
        </div>
        <div class="champ">
            <button>S'inscrire</button>

        </div>
        <?php if (isset($error)) : ?>
            <p style="color:red"> <?= $error ?></p>
        <?php endif; ?>
    </fieldset>


</form>