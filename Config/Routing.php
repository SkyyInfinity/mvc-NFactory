<?php

use App\Controller\MealController;

// $connection = new ConnectionController();
if (!empty($_GET["page"])) {
$page = $_GET["page"];
} else {
    $page = "home";
}



switch ($page) {
    case 'home':
         $meal = new MealController();
         $meal->home();
        break;
    default:
         $meal = new MealController();
         $meal->home();
        break;
}

/**
 * Créer routing
 * Dans controller proposer des url de base.
 */

/**
 * Au téléchargement si juste back-end envoyer sauvegarde comme ça. Prévoir dans le controller les url des templates à appeler.
 * Ajouter dans notice quelles routes appeler
 *
 * Si ajout template, adapter template à routing et incorporer les url dans les controller
 *
 * Si ajout d'autres modules prévoir script qui incorpore les diférrents modules et donc modifier routing et url de pages pour chaque site
 */
