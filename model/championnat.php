<?php

require_once 'dao.php';

class Championnat extends Dao {

    // Renvoie la liste des équipes
    public function getList() {
        $sql = 'select * FROM Championnat'
            . ' order by Id desc';
        $championnats = $this->executerRequete($sql);

        return $championnats;
    }

    // Renvoie les informations sur une équipe
    public function getEquipe($idChampionnant) {
        $sql = 'select * from Championnat'
            . ' where Id=?';
        $championnat = $this->executerRequete($sql, array($idChampionnant));
        if ($championnat->rowCount() == 1)
            return $championnat->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun championnat ne correspond à l'identifiant '$idChampionnant'");
    }
}

?>