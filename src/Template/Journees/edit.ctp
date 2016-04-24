<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $journee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $journee->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Journees'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-sm-4 main">
    <?= $this->Form->create($journee) ?>
        <fieldset>
            <legend><?= __('Edit Journee') ?></legend>
            <?php
                echo $this->Form->input('nomJournée', array('class' => 'form-control'));
                echo $this->Form->input('Competition_idCompetition', array('class' => 'form-control'));
            ?>
        </fieldset>
        <div style="padding-top:10px;">
            <?= $this->Form->button(__('Valider'), array('class' => 'btn btn-success')) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
