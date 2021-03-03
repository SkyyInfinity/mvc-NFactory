<?php
$title = 'Home';
?>

<div class="wrap2">
  <h2>Carte du restaurant</h2>
  <ul class="meals-links">
    <?php foreach($meals as $meal) : ?>
      <li>
        <div class="img">
          <img loading="lazy" onerror="this.src='./assets/img/meals/no-photo.png'" src="./assets/img/meals/<?php if(isset($meal->Photo)){echo $meal->Photo;}else{echo 'no-photo.png';} ?>" alt="<?php if(isset($meal->Name)){echo $meal->Name;} ?>">
        </div>
        <div class="info">
          <h3><?php if(isset($meal->Name)){echo $meal->Name;} ?></h3>
          <p><?php if(isset($meal->Description)){echo $meal->Description;} ?></p>
          <span class="price"><?php if(isset($meal->SalePrice)){echo $meal->SalePrice;} ?>€</span>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>