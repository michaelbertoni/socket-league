<div class="container">
    <div class="row">
        <div class="col-xs-4">
            <h1><?= $competition->nomCompetition ?></h1>
            <h2><?= $journee->nomJournée ?></h2>

            <div class="btn-group" role="group">
                <a href="<?= $idJourneePrev['id'] ?>" class="btn btn-default"><span aria-hidden="true">&laquo;</span></a>

                <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Journées de la compétition <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                            <?php foreach ($journeesCompetition as $journ): ?>
                                   <li><a href="<?= $journ->id ?>"><?= $journ->nomJournée ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                </div>

                <a href="<?= $idJourneeNext['id'] ?>" class="btn btn-default"><span aria-hidden="true">&raquo;</span></a>

            </div>
        </div>
                <div class="col-xs-offset-4 col-xs-4" style="padding-bottom: 50px">
                    <?= $this->Html->image('competitions/'.$competition->nomImgLogo.'', array('alt' => 'logo compétition', 'class' => 'img-responsive pull-right', 'style' => "max-width: 150px")) ?>
                </div>
    </div>

    <?php $i = 0; ?>
    
    <div class="row">
        <?php foreach ($matchs as $match): ?>
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?= $match->dateMatch->nice('Europe/Paris', 'fr-FR'); ?>
                    </div>
                    <?php echo $this->Html->link(
                        '<div class="panel-body h3" style="padding-left: 20px; padding-right: 40px; color: black">
                            <p>'.
                                $this->Html->image('equipes/'.$match['logoDomicile'].'', array('alt' => 'logo equipe domicile', 'style' => 'max-width: 40px; max-height:40px;')) . '
                                 ' . __($match->equipeDomicile.'<span class="pull-right" style="font-family: verdana;'.(($match->scoreDomicile<$match->scoreVisiteur)?'color: grey':'').'">'.$match->scoreDomicile.'</span></p><p>') .
                                $this->Html->image('equipes/'.$match['logoVisiteur'].'', array('alt' => 'logo equipe visiteur', 'style' => 'max-width: 40px; max-height:40px;')) . '
                                 ' . __($match->equipeVisiteur.'<span class="pull-right" style="font-family: verdana;'.(($match->scoreDomicile>$match->scoreVisiteur)?'color: grey':'').'">'.$match->scoreVisiteur.'</span>')
                            .'</p>
                        </div>',
                        array ('controller' => 'Matchs',
                                'action' => '', $match->id),
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