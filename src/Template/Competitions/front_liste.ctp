<div class="row">
    <div class="col-sm-12 main">
        <h2><?= __('Competitions') ?></h2>
        <?php $zone = "";
        $cptRow = 0; ?>

        <?php foreach ($competitions as $competition): 
            if ($zone != $competition->zoneCompetition) {
                if ($zone == "") {
                    $zone = $competition->zoneCompetition;
                    echo '<div id="nomZone" class="row">';
                    echo '<h3>'.$zone.'</h3>';
                } else {
                    $zone = $competition->zoneCompetition;
                    echo '</div></div><div id="nomZone" class="row">';
                    echo '<h3>'.$zone.'</h3>';
                    $cptRow = 0;
                }
            }
            
            if ($cptRow == 0) {
                echo '<div id="listeCompetitions" class="row">';
            } ?>
                    <div id="competition" class="col-md-3" style="display:inline">
                        <?php
                            echo $this->Html->link(
                                                $this->Html->image('competitions/'.$competition->zoneCompetition.'.png', array('alt' => 'logo competition', 'style' => 'padding-right: 10px')).
                                                __(h($competition->nomCompetition)),
                                                array ('controller' => 'Competitions','action' => 'LastJournee', $competition->id),
                                                array ('escape' => false,'style' => 'text-decoration: none; color: black'));
                        ?>
                    </div>
            <?php $cptRow++;
            if ($cptRow == 4) {
                echo '</div>';
                $cptRow = 0;
            }
        endforeach; ?>
        </div>
    </div>
</div>
