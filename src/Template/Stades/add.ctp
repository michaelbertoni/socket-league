<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Stades'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-sm-6 main">
        <?= $this->Form->create($stade) ?>
        <fieldset>
            <legend><?= __('Add Stade') ?></legend>
            <?php
                echo $this->Form->input('nomStade', array('class' => 'form-control'));
                echo $this->Form->input('capaciteStade', array('class' => 'form-control'));
                echo $this->Form->input('adresseStade', array('class' => 'form-control'));
                echo $this->Form->input('telephoneStade', array('class' => 'form-control'));
                echo $this->Form->input('Equipe_idEquipe', array('class' => 'form-control'));
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-default', 'style' => "margin-top: 30px")) ?>
        <?= $this->Form->end() ?>
    </div>
</div>