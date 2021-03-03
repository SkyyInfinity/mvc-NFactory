<?php
$title = 'Réserver';
?>

<div class="wrap2">
  <h2>Réservation d'une table</h1>
  <form class="" action="" method="post">
    <fieldset>
      <legend><i class="fas fa-calendar-alt"></i> Informations de réservation</legend>
      <div class="champ">
        <label for="date">Date et heure de la réservation</label>
        <input type="date" name="date" value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>">
        <span> à </span>
        <input class="date" type="time" name="time" value="<?php if(isset($_POST['time'])){echo $_POST['time'];} ?>">
        <?php if (isset($error['time'])) : ?>
                    <p style="color:red"> <?= $error['time']; ?></p>
        <?php endif; ?>
      </div>
      <div class="champ">
        <label for="tablenumb">Nombre de personnes</label>
        <select id="tablenumb" name="tablenumb">
          <option value="">--Veuillez choisir une option--</option>
          <option value="1">1 personne</option>
          <option value="2">2 personnes</option>
          <option value="3">3 personnes</option>
          <option value="4">4 personnes</option>
          <option value="5">5 personnes</option>
          <option value="6">6 personnes</option>
        </select>
        <?php if (isset($error['tablenumb'])) : ?>
                    <p style="color:red"> <?= $error['tablenumb']; ?></p>
        <?php endif; ?>
      </div>
    </fieldset>
    <div class="champ">
      <input class="button button-primary" type="submit" name="submitted" value="Réserver">
      <a class="button" href="home">Annuler</a>
    </div>
  </form>
</div>