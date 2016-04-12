<?php

require_once 'dao.php';

class Equipe extends Dao {

    // Renvoie la liste des équipes
    public function getList() {
        $sql = 'select * FROM Equipe'
            . ' order by IdEquipe desc';
        $equipes = $this->executerRequete($sql);

        return $equipes;
    }

    // Renvoie les informations sur une équipe
    public function getEquipe($idEquipe) {
        $sql = 'select * from Equipe'
            . ' where IdEquipe=?';
        $equipe = $this->executerRequete($sql, array($idEquipe));
        if ($equipe->rowCount() == 1)
            return $equipe->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucune équipe ne correspond à l'identifiant '$idEquipe'");
    }
}