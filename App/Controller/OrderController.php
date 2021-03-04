<?php
namespace App\Controller;

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
        $orderModel = new OrderModel();
        $this->render("order");
    }

}
