<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Matchs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="matchs form large-9 medium-8 columns content">
    <?= $this->Form->create($match) ?>
    <fieldset>
        <legend><?= __('Add Match') ?></legend>
        <?php
            echo $this->Form->input('scoreEquipeDomicile');
            echo $this->Form->input('scoreEquipeVisiteur');
            echo $this->Form->input('EquipeDomicile_idEquipe');
            echo $this->Form->input('EquipeVisiteur_idEquipe');
            echo $this->Form->input('Journée_idJournée');
            echo $this->Form->input('dateMatch');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
