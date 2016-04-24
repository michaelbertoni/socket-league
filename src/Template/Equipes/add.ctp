<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Equipes'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="col-sm-10 main">
        <?= $this->Form->create($equipe) ?>
        <fieldset>
            <legend><?= __('Add Equipe') ?></legend>
            <?php
                echo $this->Form->input('nomEquipe', array('class' => 'form-control'));
                echo $this->Form->input('nomCourt', array('class' => 'form-control'));
                echo $this->Form->input('presidentEquipe', array('class' => 'form-control'));
                echo $this->Form->input('dateFondationEquipe', array('class' => 'form-control'));
                echo $this->Form->input('entraineurEquipe', array('class' => 'form-control'));
                echo $this->Form->label('competitions._ids');
                foreach ($competitions as $compet):
                $competList[$compet->id] = $compet->nomCompetition;
                endforeach;
                echo $this->Form->select('competitions._ids', $competList, array('class' => 'form-control', 'multiple' => 'true'));
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-default', 'style' => "margin-top: 30px")) ?>
        <?= $this->Form->end() ?>
    </div>
</div>