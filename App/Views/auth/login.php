<?php if (!empty($_GET['id']) && $_GET['id'] == 'new') {
    ?>
    <p>Bienvenue</p>
    <?php
} ?>
<h1>Connexion</h1>

<form action="index.php?page=login" method="post">
    <label for="">Votre email<input type="email" name="email" id=""></label>
    <label for="">Votre password<input type="password" name="password" id=""></label>
    <button>Connexion</button>
   
</form>
<?php 
// var_dump($user);