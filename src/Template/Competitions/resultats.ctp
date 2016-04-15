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
                            <?php echo 
                            $this->Html->link(
                                $this->Html->div('panel-body',
                                    '<p>'.h($match['equipeDomicile']).' : '.h($match['scoreDomicile']).'</p>
                                    <p>'.h($match['equipeVisiteur']).' : '.h($match['scoreVisiteur']).'</p>',
                                    ['id' => 'match'.$match->id.'']),
                            ['controller' => 'Matchs', 'action' => 'view', $match->id],
                            ['escape' => false]); ?>
                    </div>
                </div>
                <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row">';
                endforeach; ?>
            </div>
</div>