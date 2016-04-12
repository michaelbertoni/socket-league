<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Equipes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipes form large-9 medium-8 columns content">
    <?= $this->Form->create($equipe) ?>
    <fieldset>
        <legend><?= __('Add Equipe') ?></legend>
        <?php
            echo $this->Form->input('nomEquipe');
            echo $this->Form->input('nomCourt');
            echo $this->Form->input('presidentEquipe');
            echo $this->Form->input('dateFondationEquipe');
            echo $this->Form->input('entraineurEquipe');
            echo $this->Form->input('competitions._ids', ['options' => $competitions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
