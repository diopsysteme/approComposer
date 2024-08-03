<?php
namespace App\Modele;

use App\Core\Model;


class Appro extends Model
{
    protected $table = 'appro';

    public function save($data)
    {
        // Ajoutez la logique pour sauvegarder un approvisionnement
    }

    public function findAll()
    {
        try {
            $stm = $this->query("SELECT a.id, a.date, a.montant, CONCAT(c.prenom, ' ', c.nom) AS client 
                                 FROM $this->table a
                                 JOIN client c ON c.id = a.client_id;");
            return $stm;
        } catch (\PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    public function findById(int $id)
    {
        try {
            $stm = $this->prepare("SELECT CONCAT(c.prenom, ' ', c.nom) AS client, c.telephone, ar.libelle, d.prix, d.qte, (d.qte * d.prix) AS montant, a.montant AS total 
                                   FROM $this->table a
                                   JOIN detail d ON a.id = d.id_appro 
                                   JOIN article ar ON ar.id = d.id_article 
                                   JOIN client c ON c.id = a.client_id
                                   WHERE a.id = :id;");
            $stm->execute(['id' => $id]);
            return $stm->fetchAll();
        } catch (\PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    public function findAllFiltre(array $filtre)
    {
        try {
            $where = ' WHERE 1=1';
            $data = [];
            
            if (!empty($filtre['date'])) {
                $where .= ' AND a.date = :date';
                $data['date'] = $filtre['date'];
            } 

            if (!empty($filtre['telephone'])) {
                $where .= ' AND c.telephone = :telephone';
                $data['telephone'] = $filtre['telephone'];
            } 
            
            $sql = "SELECT a.id, a.date, a.montant, CONCAT(c.prenom, ' ', c.nom) AS client 
                    FROM $this->table a 
                    JOIN client c ON c.id = a.client_id" . $where;
                    
            $stm = $this->prepare($sql);
            $stm->execute($data);
            return $stm->fetchAll();
        } catch (\PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
}
