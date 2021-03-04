<?php
namespace App\Model;

use Vendor\Model\Query;

/**
 * @method ReadAll() | Récupère tous les catégories
 * @method ReadOne(int $id) | Retourne une catégorie en fonction de son id
 * @method delete(int $id) | Supprime une catégorie en fonction de son id
 * @method create($data) | Enregistre une catégorie dans la BDD
 */
class OrderLineModel extends Query{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "orderline";


}
