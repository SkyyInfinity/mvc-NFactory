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
            <?php if (isset($error['LastName'])) : ?>
                    <p style="color:red"> <?= $error['LastName']; ?></p>
                <?php endif; ?>
        </div>
        <div class="champ">
            <label for="">Date de Naissance : <input type="date" name="BirthDate"></label>
            <?php if (isset($error['BirthDate'])) : ?>
                    <p style="color:red"> <?= $error['BirthDate']; ?></p>
                <?php endif; ?>
        </div>
        <div class="champ">
            <label for="">Addresse : <input type="text" name="Address"></label>
            <?php if (isset($error['Address'])) : ?>
                    <p style="color:red"> <?= $error['Address']; ?></p>
                <?php endif; ?>
        </div>
        <div class="champ">
            <label for="">Ville<input type="text" name="City"></label>
            <?php if (isset($error['City'])) : ?>
                    <p style="color:red"> <?= $error['City']; ?></p>
                <?php endif; ?>
        </div>
        <div class="champ">
            <label for="">Code Postale<input type="text" name="ZipCode"></label>
            <?php if (isset($error['ZipCode'])) : ?>
                    <p style="color:red"> <?= $error['ZipCode']; ?></p>
                <?php endif; ?>
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
            <label>Votre email: <input type="text" name="Email" id=""></label>
            <?php if (isset($error['Email'])) : ?>
                    <p style="color:red"> <?= $error['Email']; ?></p>
                <?php endif; ?>
        </div>
        <div class="champ">
            <label>Votre mot de passe: <input type="Password" name="Password" id=""></label>
            <?php if (isset($error['Password'])) : ?>
                    <p style="color:red"> <?= $error['Password']; ?></p>
                <?php endif; ?>
        </div>
        <div class="champ">
            <input type="submit" name="submitted" value="S'inscrire">

        </div>

    </fieldset>


</form>