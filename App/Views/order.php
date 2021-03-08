<h2>Passer une commande</h2>
<fieldset>
  <legend>Ajouter un article</legend>
  <form class="" action="" method="post">
    <!-- MENUS -->
    <div class="champ">
      <label for="meal">Produit</label>
      <select class="" name="meal">
        <option value="">--Choisir un plat--</option>
        <?php foreach ($meals as $meal) { ?>
          <option value="<?= $meal->Id; ?>"><?= $meal->Name ?></option>
        <?php } ?>
      </select>
    </div>

    <?php
      //if(!empty($_SESSION)) { print_r($_SESSION); }
      //debug($sessids);
      //debug($meals);

      $ameals = json_decode(json_encode($meals), true);

      if(!empty($sessids)){

        //debug($ameals);
        debug($sessids);
        /*foreach ($ameals as $ameal) {
          if(in_array($sessids, $ameal))
          print_r($ameal['Id']);
        }*/
      }
     ?>
    <!-- QUANTITE -->
    <div class="champ">
      <label for="quantity">Quantité</label>
      <input type="number" name="quantity" value="">
    </div>
    <!-- SUBMIT -->
    <div class="champ">
      <input type="submit" name="submitted1" value="Ajouter">
    </div>


  </form>

</fieldset>

<fieldset>
  <legend>Récapitulatif de la commande</legend>
  <table>
    <thead>
      <td>Quantité</td>
      <td>Produit</td>
      <td>Prix unitaire</td>
      <td>Prix total</td>
    </thead>
  </table>

</fieldset>


<form class="" action="" method="post">
  <input type="hidden" name="" value="">
  <input type="submit" name="submitted2" value="Envoyer">
  <a href="#">Annuler</a>
</form>
