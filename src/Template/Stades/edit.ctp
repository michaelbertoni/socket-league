<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="stades form large-9 medium-8 columns content">
    <?= $this->Form->create($stade) ?>
    <fieldset>
        <legend><?= __('Edit Stade') ?></legend>
        <?php
            echo $this->Form->input('nomStade');
            echo $this->Form->input('capaciteStade');
            echo $this->Form->input('adresseStade');
            echo $this->Form->input('telephoneStade');
            echo $this->Form->input('Equipe_idEquipe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
