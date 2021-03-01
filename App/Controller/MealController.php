<?php
namespace App\Controller;

use App\Model\MealModel;
use Vendor\Controller\Controller;

/**
 * Le CRUD (create, read, update, delete) sont l'ensemble des méthodes permettant de manipuler
 * des données dans la base de données.
 */
class MealController extends Controller{

     /**
      * Récupère et affiche toutes les catégories
      *
      */
    public function home()
    {
        $mealModel = new MealModel();

        $meals = $mealModel->findAll();


        $this->render("home", [
            "meals" => $meals,
            ]);

    }

}
