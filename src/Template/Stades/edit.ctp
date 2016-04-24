<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stades'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-sm-8 main">    <?= $this->Form->create($stade) ?>
    <fieldset>
        <legend><?= __('Edit Stade') ?></legend>
        <?php
            echo $this->Form->input('nomStade', array('class' => 'form-control'));
            echo $this->Form->input('capaciteStade', array('class' => 'form-control'));
            echo $this->Form->input('adresseStade', array('class' => 'form-control'));
            echo $this->Form->input('telephoneStade', array('class' => 'form-control'));
            echo $this->Form->input('Equipe_idEquipe', array('class' => 'form-control'));
        ?>
    </fieldset>
        <div style="padding-top:10px;">
            <?= $this->Form->button(__('Valider'), array('class' => 'btn btn-success')) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
