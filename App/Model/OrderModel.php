<?php
namespace App\Model;

use Vendor\Model\Query;

/**
 * @method ReadAll() | Récupère tous les catégories
 * @method ReadOne(int $id) | Retourne une catégorie en fonction de son id
 * @method delete(int $id) | Supprime une catégorie en fonction de son id
 * @method create($data) | Enregistre une catégorie dans la BDD
 */
class OrderModel extends Query{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "order";

     /**
     * Retourne le prenom d'un user
     *
     * @return array
     */
    public function jointure($id) {
        $statement = "SELECT DISTINCT user.FirstName FROM user INNER JOIN `order` ON user.Id = order.User_Id WHERE user.Id = $id ";
        return $this->query($statement, null, false);
    }

    public function myFindAll(){
        $statement = "SELECT * FROM `order` ORDER BY id ASC";
        return $this->query($statement, null, false);

    }

}
