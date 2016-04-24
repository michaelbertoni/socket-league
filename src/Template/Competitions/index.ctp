<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="col-sm-10 main">
        <h2><?= __('Competitions') ?></h2>
        <div class="row">
            <h3>FRANCE</h3>
        </div>
        <div class="row">
          <div class="col-md-12>
                <?php $cpt = 0 ?>
                <?php foreach ($competitions as $competition): ?>
                <?php if(($cpt % 4) == 0) { ?>
                    <div class="row"></div>
                <?php   } ?>
                <div class="col-md-2 style="display:inline">
                    <?php
                        echo $this->Html->link(
                                            $this->Html->image('competitions/'.$competition->nomImgLogo.'', array('alt' => 'logo competition', 'style' => 'padding-right: 10px')).
                                            __(h($competition->nomCompetition)),
                                            array ('controller' => 'Competitions','action' => 'View', $competition->id),
                                            array ('escape' => false,'style' => 'text-decoration: none; color: black'));
                 $cpt ++;
                 ?>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
    </div>
</div>
