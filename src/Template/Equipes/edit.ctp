<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipe->id)]
            )
        ?></li>
            <li><?= $this->Html->link(__('List Equipes'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="col-sm-10 main">
        <?= $this->Form->create($equipe) ?>
        <fieldset>
            <legend><?= __('Edit Equipe') ?></legend>
            <?php
                echo $this->Form->input('nomEquipe', array('class' => 'form-control'));
                echo $this->Form->input('nomCourt', array('class' => 'form-control'));
                echo $this->Form->input('presidentEquipe', array('class' => 'form-control'));
                echo $this->Form->input('dateFondationEquipe', array('class' => 'form-control'));
                echo $this->Form->input('entraineurEquipe', array('class' => 'form-control'));
                foreach ($competitions as $compet):
                    $competList[$compet->id] = $compet->nomCompetition;
                endforeach;
                echo $this->Form->input('competitions._ids', ['options' => $competList, 'class' => 'form-control']);
            ?>
        </fieldset>
        <div style="padding-top:15px;">
            <?= $this->Form->button(__('Valider'),array('class' => 'btn btn-success', 'style' => 'padding-top:10px')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>



