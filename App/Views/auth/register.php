<?php
$title = "Inscription";
?>

<div class="wrap2">
    <h2>Inscription</h2>
    <form action="" method="post">
        <fieldset>
            <legend><i class="fas fa-address-book"></i> Identité et Coordonnées</legend>
            <div class="champ">
                <label for="FirstName">Nom</label>
                <input type="text" name="FirstName" id="FirstName" value="<?php if(isset($_POST['FirstName'])){echo $_POST['FirstName'];} ?>">
                <?php if (isset($error['FirstName'])) : ?>
                    <p style="color:red"> <?= $error['FirstName']; ?></p>
                <?php endif; ?>
            </div>
            <div class="champ">
                <label for="LastName">Prénom</label>
                <input type="text" name="LastName" id="LastName" value="<?php if(isset($_POST['LastName'])){echo $_POST['LastName'];} ?>">
                <?php if (isset($error['LastName'])) : ?>
                    <p style="color:red"> <?= $error['LastName']; ?></p>
                <?php endif; ?>
            </div>
            <div class="champ">
                <label for="BirthDate">Date de naissance</label>
                <input type="date" name="BirthDate" id="BirthDate" value="<?php if(isset($_POST['BirthDate'])){echo $_POST['BirthDate'];} ?>">
                <?php if (isset($error['BirthDate'])) : ?>
                    <p style="color:red"> <?= $error['BirthDate']; ?></p>
                <?php endif; ?>
            </div>
            <div class="champ">
                <label for="Address">Adresse</label>
                <input type="text" name="Address" id="Address" value="<?php if(isset($_POST['Address'])){echo $_POST['Address'];} ?>">
                <?php if (isset($error['Address'])) : ?>
                    <p style="color:red"> <?= $error['Address']; ?></p>
                <?php endif; ?>
            </div>
            <div class="champ">
                <label for="City">Ville</label>
                <input type="text" name="City" id="City" value="<?php if(isset($_POST['City'])){echo $_POST['City'];} ?>">
                <?php if (isset($error['City'])) : ?>
                    <p style="color:red"> <?= $error['City']; ?></p>
                <?php endif; ?>
            </div>
            <div class="champ">
                <label for="ZipCode">Code Postal</label>
                <input type="text" name="ZipCode" id="ZipCode" value="<?php if(isset($_POST['ZipCode'])){echo $_POST['ZipCode'];} ?>">
                <?php if (isset($error['ZipCode'])) : ?>
                    <p style="color:red"> <?= $error['ZipCode']; ?></p>
                <?php endif; ?>
            </div>
            <div class="champ">
                <label for="Phone">Telephone</label>
                <input type="tel" name="Phone" id="Phone" value="<?php if(isset($_POST['Phone'])){echo $_POST['Phone'];} ?>">
                <?php if (isset($error['Phone'])) : ?>
                    <p style="color:red"> <?= $error['Phone']; ?></p>
                <?php endif; ?>
            </div>
        </fieldset>

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
            <input class="button button-primary" type="submit" name="submitted" value="S'inscrire">
        </div>
    </form>
</div>