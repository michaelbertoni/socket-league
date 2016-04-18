<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Journees'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    <div class="col-sm-6 main">
        <?= $this->Form->create($journee) ?>
        <fieldset>
            <legend><?= __('Add Journee') ?></legend>
            <?php
                echo $this->Form->input('nomJournée', array('class' => 'form-control'));
                echo $this->Form->select('Competition_idCompetition', $competitions, array('class' => 'form-control', 'multiple' => 'true', 'style' => 'width: 8%'));

            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-default', 'style' => "margin-top: 30px")) ?>
        <?= $this->Form->end() ?>
    </div>
</div>