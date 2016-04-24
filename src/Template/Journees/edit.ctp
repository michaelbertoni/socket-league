<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $journee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $journee->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Journees'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="journees form large-9 medium-8 columns content">
    <?= $this->Form->create($journee) ?>
    <div class="col-md-4">
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
    </div>
    <?= $this->Form->end() ?>
</div>
