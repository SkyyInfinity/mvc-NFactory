<?php
print_r($error);

$title = "Inscription";
?>
<h1>Inscription</h1>

<form action="" method="post">
    <fieldset>
        <legend>Identité et Coordonnées</legend>
        <div class="champ">
            <label>Nom: <input type="text" name="FirstName" id="nom"></label>
            <?php if (isset($error['FirstName'])) : ?>
                    <p style="color:red"> <?= $error['FirstName']; ?></p>
                <?php endif; ?>
        </div>
        <div class="champ">
            <label>Prenom: <input type="text" name="LastName" id="prenom"></label>
        </div>
        <div class="champ">
            <label for="">Date de Naissance : <input type="date" name="BirthDate"></label>
        </div>
        <div class="champ">
            <label for="">Addresse : <input type="text" name="Address"></label>
        </div>
        <div class="champ">
            <label for="">Ville<input type="text" name="City"></label>
        </div>
        <div class="champ">
            <label for="">Code Postale<input type="text" name="ZipCode"></label>
        </div>
        <div class="champ">
            <label for="">Telephone<input type="text" name="Phone"></label>
                <?php if (isset($error['Phone'])) : ?>
                    <p style="color:red"> <?= $error['Phone']; ?></p>
                <?php endif; ?>
        </div>

    </fieldset>
    <fieldset>
        <legend>informations d'authentification</legend>
        <div class="champ">
            <label>Votre email: <input type="text" name="email" id=""></label>
        </div>
        <div class="champ">
            <label>Votre mot de passe: <input type="Password" name="Password" id=""></label>
        </div>
        <div class="champ">
            <input type="submit" name="submitted" value="S'inscrire">

        </div>

    </fieldset>


</form>