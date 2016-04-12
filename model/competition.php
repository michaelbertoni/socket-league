<?php

require_once 'dao.php';

class Competition extends Dao {

    // Renvoie la liste des équipes
    public function getList() {
        $sql = 'select * FROM Competition'
            . ' order by IdCompetition desc';
        $competitions = $this->executerRequete($sql);

        return $competitions;
    }

    // Renvoie les informations sur une équipe
    public function getEquipe($idCompetition) {
        $sql = 'select * from Competition'
            . ' where IdCompetition=?';
        $competition = $this->executerRequete($sql, array($idCompetition));
        if ($competition->rowCount() == 1)
            return $competition->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucune compétition ne correspond à l'identifiant '$idCompetition'");
    }
}