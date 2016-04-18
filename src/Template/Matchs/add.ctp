<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Matchs'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-sm-6 main">
        <?= $this->Form->create($match) ?>
        <fieldset>
            <legend><?= __('Add Match') ?></legend>
            <?php
                echo $this->Form->input('scoreEquipeDomicile', array('class' => 'form-control'));
                echo $this->Form->input('scoreEquipeVisiteur', array('class' => 'form-control'));
                echo $this->Form->input('EquipeDomicile_idEquipe');
                echo $this->Form->input('EquipeVisiteur_idEquipe', array('class' => 'form-control'));
                echo $this->Form->input('Journée_idJournée', array('class' => 'form-control'));
                echo $this->Form->input('dateMatch', array('class' => 'form-control'));
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-default', 'style' => "margin-top: 30px")) ?>
        <?= $this->Form->end() ?>
    </div>
