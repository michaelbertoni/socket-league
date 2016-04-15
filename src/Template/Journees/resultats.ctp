<div class="container-fluid">
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

            <?php $i = 0; ?>
            
            <div class="row" style="padding-top: 10px">
            <?php foreach ($matchs as $match): ?>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= h($match['dateMatch']->nice('Europe/Paris', 'fr-FR')); ?></div>
                            <?php 
                            echo $this->Html->link(
                                $this->Html->div('panel-body',
                                    '<p>'.h($match['equipeDomicile']).' : '.h($match['scoreDomicile']).'</p>
                                    <p>'.h($match['equipeVisiteur']).' : '.h($match['scoreVisiteur']).'</p>',
                                    ['id' => 'match'.$match->id.'']),
                                ['controller' => 'Matchs', 'action' => 'view', $match->id],
                                ['escape' => false]);
                            ?>
                    </div>
                </div>
                <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row">';
                endforeach; ?>
            </div>
</div>
