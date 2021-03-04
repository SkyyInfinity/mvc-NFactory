<?php
namespace App\Model;

use Vendor\Model\Query;

/**
 * @method ReadAll() | Récupère tous les catégories
 * @method ReadOne(int $id) | Retourne une catégorie en fonction de son id
 * @method delete(int $id) | Supprime une catégorie en fonction de son id
 * @method create($data) | Enregistre une catégorie dans la BDD
 */
class BookingModel extends Query{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "booking";

    /**
     * Retourne le prenom d'un user les plus actifs
     *
     * @return array
     */
    public function jointure($id) {
        $statement = "SELECT DISTINCT user.FirstName FROM user INNER JOIN booking ON user.Id = booking.User_Id WHERE user.Id = $id ";
        return $this->query($statement, null, false);

    }
    

}
