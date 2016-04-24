<div class="container">
    <div class="row text-center">
            <div>
                <?php echo $this->Html->image('equipes/'.$equipefront->nomImgLogo.'', array('alt' => 'logo equipe')); ?>
            </div>
            <div>
                <h2><?php echo $equipefront->nomEquipe ?><h2>
            </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6">
            <h3>Informations</h3>
            <?php
                echo '<div>'.$equipefront->nomEquipe.'</div>';
                echo '<div><b>Fondee en : </b>'.$equipefront->dateFondationEquipe.'</div>';
                echo '<div><b>President : </b>'.$equipefront->presidentEquipe.'</div>';
                echo '<div><b>Entraineur : </b>'.$equipefront->entraineurEquipe.'</div>';
            ?>
        </div>
        <div class="col-md-6" style="margin-bottom:50px">
            <h3>Stade</h3>
            <?php
                echo '<div><b>Nom : </b>'.$equipefront->stade->nomStade.'</div>';
                echo '<div><b>Capacite : </b>'.$equipefront->stade->capaciteStade.'</div>';
                echo '<div><b>Adresse : </b>'.$equipefront->stade->adresseStade.'</div>';
                echo '<div><b>Telephone : </b>'.$equipefront->stade->telephoneStade.'</div>';
            ?>
        </div>
    </div>
    
    <?php $i = 0; ?>

    <h2>Matchs de l'équipe</h2>

    <div class="row">
        <?php foreach ($equipefront->matchs as $match): ?>
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?= $match->dateMatch->nice('Europe/Paris', 'fr-FR'); ?> - <?= $match->journee->competition->nomCompetition ?>
                    </div>
                    <?php echo $this->Html->link(
                        '<div class="panel-body h3" style="padding-left: 20px; padding-right: 40px; color: black">
                            <p>'.
                                $this->Html->image('equipes/'.$match->Domicile->nomImgLogo.'', array('alt' => 'logo equipe domicile', 'style' => 'max-width: 40px; max-height:40px;')) . '
                                 ' . __($match->Domicile->nomCourt.'<span class="pull-right" style="font-family: verdana;'.(($match->scoreEquipeDomicile<$match->scoreEquipeVisiteur)?'color: grey':'').'">'.$match->scoreEquipeDomicile.'</span></p><p>') .
                                $this->Html->image('equipes/'.$match->Visiteur->nomImgLogo.'', array('alt' => 'logo equipe visiteur', 'style' => 'max-width: 40px; max-height:40px;')) . '
                                 ' . __($match->Visiteur->nomCourt.'<span class="pull-right" style="font-family: verdana;'.(($match->scoreEquipeDomicile>$match->scoreEquipeVisiteur)?'color: grey':'').'">'.$match->scoreEquipeVisiteur.'</span>')
                            .'</p>
                        </div>',
                        array ('controller' => 'Matchs',
                                'action' => 'frontView', $match->id),
                        array ('escape' => false,
                                'style' => 'text-decoration: none'));
                    ?>
                </div>
            </div>
        <?php $i++;
        if ($i%3 == 0) echo '</div><div class="row">';
        endforeach; ?>
    </div>
</div>