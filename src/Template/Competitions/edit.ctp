<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competitions form large-9 medium-8 columns content">
    <?= $this->Form->create($competition) ?>
    <fieldset>
        <legend><?= __('Edit Competition') ?></legend>
        <?php
            echo $this->Form->input('nomCompetition');
            echo $this->Form->input('zoneCompetition');
            echo $this->Form->input('nbEquipeCompetition');
            echo $this->Form->input('ptsGagneCompetition');
            echo $this->Form->input('ptsPerduCompetition');
            echo $this->Form->input('ptsNulCompetition');
            echo $this->Form->input('typeClsmtExAequoCompetition');
            echo $this->Form->input('equipes._ids', ['options' => $equipes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
