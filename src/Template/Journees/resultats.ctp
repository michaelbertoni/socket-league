<div class="container-fluid">
            <div class="row-fluid">
                <div class="col-xs-4">
                    <h1><?= h($competition->nomCompetition) ?></h1>
                    <h2><?= h($journee->nomJournée) ?><h2>

                    <div class="btn-group" role="group">
                        <a href="<?php echo $idJourneePrev['id']; ?>"" class="btn btn-default"><span aria-hidden="true">&laquo;</span></a>

                        <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Journées de la compétition <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($journeesCompetition as $journ): ?>
                                            <li><a href=<?php echo "'$journ->id'" ?>><?php echo $journ->nomJournée; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                        </div>

                        <a href="<?php echo $idJourneeNext['id']; ?>"" class="btn btn-default"><span aria-hidden="true">&raquo;</span></a>

                    </div>
                </div>
                <div class="col-xs-offset-4 col-xs-4" style="padding-bottom: 50px">
                    <img src="/img/competitions/<?php echo $competition->nomImgLogo; ?>" alt="logo competition" class="img-responsive pull-right" style="max-height:200px">
                </div>
            </div>
            <?php $i = 0; ?>
            
            <div class="row-fluid">
            <?php foreach ($matchs as $match): ?>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= h($match['dateMatch']->nice('Europe/Paris', 'fr-FR')); ?></div>
                            <?php 
                            echo $this->Html->link(
                                $this->Html->div('panel-body',
                                    '<p><img src="/img/equipes/'.$match->logoDomicile.'" style="padding-right: 10px" alt="logo equipe domicile">'.h($match['equipeDomicile']).' : '.h($match['scoreDomicile']).'</p>
                                    <p><img src="/img/equipes/'.$match->logoVisiteur.'" style="padding-right: 10px" alt="logo equipe visiteur">'.h($match['equipeVisiteur']).' : '.h($match['scoreVisiteur']).'</p>',
                                    ['id' => 'match'.$match->id.'']),
                                ['controller' => 'Matchs', 'action' => '', $match->id],
                                ['escape' => false]);
                            ?>
                    </div>
                </div>
                <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row-fluid">';
                endforeach; ?>
            </div>
</div>
