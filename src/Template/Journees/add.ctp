<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Journees'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="journees form large-9 medium-8 columns content">
    <?= $this->Form->create($journee) ?>
    <fieldset>
        <legend><?= __('Add Journee') ?></legend>
        <?php
            echo $this->Form->input('nomJournée');
            echo $this->Form->input('Competition_idCompetition');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
