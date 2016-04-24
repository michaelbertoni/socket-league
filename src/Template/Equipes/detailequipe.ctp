<div class="container">
    <div class="row">
            <div class="col-md-offset-3">
                <?php echo $this->Html->image('equipes/'.$equipefront->nomImgLogo.'', array('alt' => 'logo equipe')); ?>
            </div>
            <div class="col-md-offset-2">
                <h2><?php echo $equipefront->nomEquipe ?><h2>
            </div>
    </div>
    <div class="col-md-6">
        <h3>Informations</h3>
        <?php
            echo '<div>'.$equipefront->nomEquipe.'</div>';
            echo '<div><b>Fondee en :</b>'.$equipefront->dateFondationEquipe.'</div>';
            echo '<div><b>President :</b>'.$equipefront->presidentEquipe.'</div>';
            echo '<div><b>Entraineur :</b>'.$equipefront->entraineurEquipe.'</div>';
        ?>
    </div>
    <div class="col-md-6">
        <h3>Stade</h3>
        <?php
            echo '<div><b>Nom :</b>'.$equipefront->stade->nomStade.'</div>';
            echo '<div><b>Capacite :</b>'.$equipefront->stade->capaciteStade.'</div>';
            echo '<div><b>Adresse :</b>'.$equipefront->stade->adresseStade.'</div>';
            echo '<div><b>Telephone :</b>'.$equipefront->stade->telephoneStade.'</div>';
        ?>
    </div>
</div>