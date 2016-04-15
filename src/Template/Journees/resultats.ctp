<div class="container-fluid">
    <h1><?= h($competition->nomCompetition) ?></h1>
    <h2><?= h($journee->nomJournée) ?><h2>

            <div id="navigator" class="frame">
                    <ul class="slidee">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>

                        <?php foreach ($journeesCompetition as $journ): ?>
                            <li><a href=<?php echo "'$journ->id'" ?>><?php echo $journ->nomJournée; ?></a></li>
                        <?php endforeach; ?>

                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
            </div>

            <?php $i = 0; ?>
            
            <div class="row">
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


<script>
$(document).ready(function() {

    $('.frame').sly();
});
</script>