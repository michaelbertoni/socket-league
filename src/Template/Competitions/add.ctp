<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="col-sm-10 main">
        <?= $this->Form->create($competition) ?>
        <fieldset>
            <legend><?= __('Add Competition') ?></legend>
            <?php
                echo $this->Form->input('nomCompetition', array('class' => 'form-control'));
                echo $this->Form->input('zoneCompetition', array('class' => 'form-control'));
                echo $this->Form->input('nbEquipeCompetition', array('class' => 'form-control'));
                echo $this->Form->input('ptsGagneCompetition', array('class' => 'form-control'));
                echo $this->Form->input('ptsPerduCompetition', array('class' => 'form-control'));
                echo $this->Form->input('ptsNulCompetition', array('class' => 'form-control'));
                echo $this->Form->input('typeClsmtExAequoCompetition', array('class' => 'form-control'));
                echo $this->Form->label('equipes._ids');
                foreach ($equipes as $eq):
                $equipeListe[$eq->id] = $eq->nomEquipe;
                endforeach;
                echo $this->Form->select('equipes._ids', $equipeListe, array('class' => 'form-control', 'multiple' => 'true'));
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-default', 'style' => "margin-top: 30px")) ?>
        <?= $this->Form->end() ?>
    </div>
</div>