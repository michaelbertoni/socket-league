<!--/*var_dump($competition);
var_dump($journee);
var_dump($matchs);*/-->

<div class="container-fluid">
    <h1><?= h($competition->nomCompetition) ?></h1>
    <h2><?= h($journee->nomJournée) ?><h2>

            <?php $i = 0; ?>
            
            <div class="row">
            <?php foreach ($matchs as $match): ?>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= h($match['dateMatch']->nice('Europe/Paris', 'fr-FR')); ?></div>
                        <div class="panel-body">
                            <?= h($match['equipeDomicile']) ?> : <?= h($match['scoreDomicile']) ?><br>
                            <?= h($match['equipeVisiteur']) ?> : <?= h($match['scoreVisiteur']) ?>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row">';
                endforeach; ?>
            </div>
</div>