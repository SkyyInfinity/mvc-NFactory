<?php
namespace App\Controller;

use App\Model\MealModel;
use App\Model\OrderModel;
use App\Model\OrderLineModel;
use Vendor\Controller\Controller;

/**
 * Le CRUD (create, read, update, delete) sont l'ensemble des méthodes permettant de manipuler
 * des données dans la base de données.
 */
class OrderController extends Controller{

     /**
      * Récupère et affiche tous les menus
      *
      */

      public function order()
      {

        // On récupère les menus en BDD
        $mealModel = new MealModel();
        $meals = $mealModel->findAll();
        $data = '';

        // Menus to SESSION
        if(!empty($_POST['submitted1']))
        {
          $data = $_POST['meal'];
          $_SESSION['meals']['id_'.$data] = $data;
          $sessids = array();
          $sessids = $_SESSION['meals'];

        }

        // SESSION to orderline
        /*foreach ($meals as $meal) {
          foreach ($sessids as $sessid) {
            echo $mea
          }
        }*/

        // AFFICHAGE

        $this->render("order", ["meals" => $meals, "data" => $data, "sessids" => $sessids]);
      }





}
