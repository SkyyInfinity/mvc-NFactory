<h2>Réservation d'une table</h1>
<form class="" action="" method="post">
  <fieldset>
    <legend>Informations</legend>
    <div class="champ">
      <label for="date"></label>
      <input type="date" name="date" value="">
      <span> à </span>
      <input type="time" name="time" value="">
    </div>
    <div class="champ">
      <select class="" name="tablenumb">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
    </div>
  </fieldset>
  <div class="champ">
    <input type="submit" name="submitted" value="Réserver">
  </div>
  <div class="champ">
    <div class="">
      <a href="index.php?page=home">Annuler</a>
    </div>
  </div>
</form>
