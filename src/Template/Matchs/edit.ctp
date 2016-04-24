<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $match->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Matchs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="matchs form large-9 medium-8 columns content">
    <?= $this->Form->create($match) ?>
    <div class="col-md-4">
        <fieldset>
            <legend><?= __('Edit Match') ?></legend>
            <?php
                echo $this->Form->input('scoreEquipeDomicile', array('class' => 'form-control'));
                echo $this->Form->input('scoreEquipeVisiteur', array('class' => 'form-control'));
                echo $this->Form->input('EquipeDomicile_idEquipe', array('class' => 'form-control'));
                echo $this->Form->input('EquipeVisiteur_idEquipe', array('class' => 'form-control'));
                echo $this->Form->input('Journée_idJournée', array('class' => 'form-control'));
                echo '<div style="padding-top:10px;">'.$this->Form->input('dateMatch').'</div>';
            ?>
        </fieldset>
        <div style="padding-top:10px;">
            <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-success')) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
