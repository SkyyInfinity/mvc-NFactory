<?php
namespace App\Model;

use Vendor\Model\Query;

/**
 * @method ReadAll() | Récupère tous les catégories
 * @method ReadOne(int $id) | Retourne une catégorie en fonction de son id
 * @method delete(int $id) | Supprime une catégorie en fonction de son id
 * @method create($data) | Enregistre une catégorie dans la BDD
 */
class MealModel extends Query{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "meal";

    /**
     * Met à jour une catégorie dans la BDD
     *
     * @param int $id
     * @param array $data
     */
    public function update(int $id, array $data)
    {
        $statement = "UPDATE $this->table SET
                        Name = :Name
                        WHERE id = $id";

        $this->db->postData($statement, $data);
    }
}
